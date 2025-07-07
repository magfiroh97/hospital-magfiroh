<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::with(['pasien', 'dokter'])->get();
        return view('pendaftarans.index', compact('pendaftarans'));
    }

    public function create()
    {
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('pendaftarans.create', compact('pasiens', 'dokters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:dokters,id',
            'tanggal_daftar' => 'required|date',
        ]);
        Pendaftaran::create($request->all());
        return redirect()->route('pendaftarans.index')->with('success', 'Pendaftaran berhasil');
    }

    // ✅ TAMBAHAN UNTUK EDIT
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('pendaftarans.edit', compact('pendaftaran', 'pasiens', 'dokters'));
    }

    // ✅ TAMBAHAN UNTUK UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:dokters,id',
            'tanggal_daftar' => 'required|date',
        ]);

        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update($request->all());

        return redirect()->route('pendaftarans.index')->with('success', 'Data pendaftaran berhasil diperbarui.');
    }

    public function approve(Pendaftaran $pendaftaran)
    {
        $pendaftaran->update(['status' => 'approved']);
        return redirect()->route('pendaftarans.index')->with('success', 'Pendaftaran disetujui');
    }

    public function reject(Pendaftaran $pendaftaran)
    {
        $pendaftaran->update(['status' => 'rejected']);
        return redirect()->route('pendaftarans.index')->with('success', 'Pendaftaran ditolak');
    }
}