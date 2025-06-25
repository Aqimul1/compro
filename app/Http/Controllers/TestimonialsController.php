<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialsController extends Controller
{
    public function index()
    {
        return view('admin.testimonials.index', [
            'testimonials' => Testimonial::all(),
            'title' => 'Manage Testimonials',
            'activePage' => 'testimonials'
        ]);
    }

    public function create()
    {
        return view('admin.testimonials.create', [
            'title' => 'Tambah Testimonial',
            'activePage' => 'testimonials'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'pesan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', [
            'testimonial' => $testimonial,
            'title' => 'Edit Testimonial',
            'activePage' => 'testimonials'
        ]);
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'pesan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            if ($testimonial->foto) {
                Storage::disk('public')->delete($testimonial->foto);
            }
            $data['foto'] = $request->file('foto')->store('testimonials', 'public');
        }

        $testimonial->update($data);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        if ($testimonial->foto) {
            Storage::disk('public')->delete($testimonial->foto);
        }

        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil dihapus.');
    }
}
