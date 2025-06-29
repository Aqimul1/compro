<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('admin.settings.index',[
            'settings' => Setting::all(),
            'activePage' => 'settings',
            'title' => 'Settings',
        ]);
    }

    public function update(Request $request, Setting $setting)
    {
        // Validasi request, pastikan 'value' tidak kosong
        $request->validate([
            'value' => 'required',
        ]);

        // Update value dari setting yang dipilih
        $setting->update([
            'value' => $request->value,
        ]);

        return redirect()->route('admin.settings.index')->with('success', 'Pengaturan berhasil diperbarui.');
    }
}