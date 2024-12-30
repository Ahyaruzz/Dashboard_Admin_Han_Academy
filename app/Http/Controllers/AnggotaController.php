<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'gender' => 'required|in:Laki-Laki,Perempuan',
        ]);

        // Simpan data anggota ke database
        // Contoh: Anggota::create($validated);

        return redirect()->back()->with('success', 'Anggota berhasil ditambahkan!');
    }
}