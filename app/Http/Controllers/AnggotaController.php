<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Coach;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $kelas = Kelas::all();
        return view('anggota', compact('anggota', 'kelas'));
    }
    public function getCoachesByClass($kelasId)
    {
        try {
            Log::info('Attempting to fetch coaches for kelasId: ' . $kelasId);
            
            $coaches = Coach::where('kelas_id', $kelasId)
                           ->select('id', 'nama')
                           ->get();
            
            if ($coaches->isEmpty()) {
                Log::warning('No coaches found for kelasId: ' . $kelasId);
                return response()->json([]);
            }
            
            Log::info('Successfully fetched coaches:', ['count' => $coaches->count(), 'data' => $coaches]);
            
            return response()->json($coaches);
        } catch (\Exception $e) {
            Log::error('Error in getCoachesByClass: ' . $e->getMessage(), [
                'kelasId' => $kelasId,
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            return response()->json(['error' => 'Failed to load coaches: ' . $e->getMessage()], 500);
        }
    }
    public function store(Request $request)
    {
        try {
            Log::info('Incoming request data:', $request->all());
    
            $validated = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'gender' => 'required',
                'beladiri' => 'required',
                'membership' => 'required',
                'coach' => 'required'
            ]);
    
            $kelas = Kelas::find($request->beladiri);
            Log::info('Found kelas:', ['kelas' => $kelas]);
            
            if (!$kelas) {
                throw new \Exception('Invalid beladiri selection');
            }
    
            Log::info('Looking for coach with ID:', ['coach_id' => $request->coach]);
            
            $coach = Coach::find($request->coach);
            
            Log::info('Coach lookup result:', ['coach' => $coach]);
            
            if (!$coach) {
                $allCoaches = Coach::all();
                Log::info('Available coaches:', ['coaches' => $allCoaches]);
                throw new \Exception('Invalid coach selection');
            }
    
            // Create anggota
            $anggota = new Anggota();
            $anggota->name = $request->name;
            $anggota->phone = $request->phone;
            $anggota->gender = $request->gender;
            $anggota->beladiri = $kelas->nama_kelas;
            $anggota->membership = $request->membership;
            $anggota->coach_id = $coach->id;
            
            Log::info('About to save anggota with data:', $anggota->toArray());
            
            $anggota->save();
    
            Log::info('Anggota created successfully', ['id' => $anggota->id]);
    
            return redirect()
                ->route('anggota.index')
                ->with('success', 'Data anggota berhasil ditambahkan');
    
        } catch (\Exception $e) {
            Log::error('Error creating anggota: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal menambahkan data: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Anggota deleted successfully.');
    }

    public function update(Request $request, $id)
{
    try {
        Log::info('Update request received for ID: ' . $id);
        Log::info('Request data:', $request->all());

        $anggota = Anggota::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'beladiri' => 'required',
            'membership' => 'required',
            'coach' => 'required'
        ]);

        // Get the kelas
        $kelas = Kelas::find($request->beladiri);
        if (!$kelas) {
            throw new \Exception('Invalid beladiri selection');
        }
        
        // Get the coach
        $coach = Coach::find($request->coach);
        if (!$coach) {
            throw new \Exception('Invalid coach selection');
        }

        // The beladiri value should match exactly what's in the database enum
        $anggota->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'beladiri' => $kelas->nama_kelas, // This will use the exact value from kelas table
            'membership' => $request->membership,
            'coach_id' => $coach->id
        ]);

        Log::info('Anggota updated successfully');

        return redirect()
            ->route('anggota.index')
            ->with('success', 'Data anggota berhasil diperbarui');
                
    } catch (\Exception $e) {
        Log::error('Error updating anggota: ' . $e->getMessage());
        return redirect()
            ->back()
            ->with('error', 'Gagal memperbarui data: ' . $e->getMessage());
    }
}
}
