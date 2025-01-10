<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function home()
    {   
        // Menghitung jumlah total anggota
        $totalAnggota = Anggota::count();
        $totalVIP = Anggota::where('membership', 'VIP')->count();

        return view('home', compact('totalAnggota','totalVIP'));
    }

    public function kelas()
    {   
        // Menghitung jumlah total anggota per kelas
        $totalVIPClass = Anggota::where('beladiri', 'VIP Class')->count();
        $totalMMA = Anggota::where('beladiri', 'MMA')->count();
        $totalMuay = Anggota::where('beladiri', 'Muay Thai')->count();
        $totalKids = Anggota::where('beladiri', 'Kids Warrior')->count();

        return view('kelas', compact('totalVIPClass','totalMMA','totalMuay','totalKids'));
    }

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

    public function update(Request $request, $id)
    {
    $anggota = Anggota::findOrFail($id);
    $anggota->update($request->all());
    return redirect()->back()->with('success', 'Data anggota berhasil diperbarui.');
    }

}
