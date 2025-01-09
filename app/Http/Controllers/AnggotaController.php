<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota', compact('anggota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'beladiri' => 'required',
            'membership' => 'required',
            'coach' => 'required',
        ]);

        Anggota::create($request->all());
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
    }


    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Anggota deleted successfully.');
    }
}
