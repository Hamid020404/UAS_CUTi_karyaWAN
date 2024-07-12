<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pengajuan = Pengajuan::all();
        return view('admin.pengajuan.index', compact('list_pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengajuan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi Input
        $validated = $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'jumlah' => 'required|integer',
            'ket' => 'required|string',
            'status' => 'required|in:S, T',
            'nip' => 'required|string',
        ]);
        //menyimpan
        pengajuan::create($validated);
        return redirect('dashboard/pengajuan')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('admin.pengajuan.show', compact('pengajuan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('admin.pengajuan.edit', compact('pengajuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi form input
        $validated = $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'jumlah' => 'required|integer',
            'ket' => 'required|string',
            'status' => 'required',
            'nip' => 'required|string',
        ]);

        $pengajuan = Pengajuan::find($id);
        $pengajuan->update($validated);

        return redirect('dashboard/pengajuan')->with('pesan', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengajuan = Pengajuan::find($id);
        $pengajuan->delete();

        return redirect('dashboard/pengajuan')->with('pesan', 'Data Berhasil Dihapus');
    }
}
