<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        return view('admin.galleries.index', [
            'galleries' => Gallery::latest()->get(),
            'activePage' => 'galleries',
            'title' => 'Galeri Produk'
        ]);
    }

    public function create()
    {
        return view('admin.galleries.create', [
            'activePage' => 'galleries',
            'title' => 'Tambah Gambar Galeri'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('galeri', 'public');
        }

        Gallery::create($data);
        return redirect()->route('galleries.index')->with('success', 'Gambar galeri berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('admin.galleries.edit', [
            'gallery' => Gallery::findOrFail($id),
            'activePage' => 'galleries',
            'title' => 'Edit Gambar Galeri'
        ]);
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($gallery->gambar);
            $data['gambar'] = $request->file('gambar')->store('galeri', 'public');
        }

        $gallery->update($data);
        return redirect()->route('galleries.index')->with('success', 'Gambar galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        Storage::disk('public')->delete($gallery->gambar);
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Gambar galeri berhasil dihapus.');
    }
}
