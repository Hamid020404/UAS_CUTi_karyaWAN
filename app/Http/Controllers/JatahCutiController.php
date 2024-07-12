<?php

namespace App\Http\Controllers;

use App\Models\JatahCuti;
use Illuminate\Http\Request;
use App\Models\Pegawai;


class JatahCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_jatahcuti = Jatahcuti::all();
        return view('admin.jatahcuti.index', compact('list_jatahcuti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $jatahcutis = Pegawai::all();
        return view('admin.jatahcuti.create', compact('jatahcutis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi Input
        $validated = $request->validate([
            'tahun' => 'required|integer',
            'jumlah' => 'required|integer',
            'nip' => 'required|string'
        ]);
        //menyimpan
        jatahcuti::create($validated);
        return redirect('dashboard/jatahcuti')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jatahcuti = Jatahcuti::find($id);
        return view('admin.jatahcuti.show', compact('jatahcuti'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jatahcuti = Jatahcuti::find($id);
        return view('admin.jatahcuti.edit', compact('jatahcuti'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi form input
        $validated = $request->validate([
            'tahun' => 'required|int',
            'jumlah' => 'required|int',
            'nip' => 'required|string'
        ]);

        $jatahcuti = Jatahcuti::find($id);
        $jatahcuti->update($validated);

        return redirect('dashboard/jatahcuti')->with('pesan', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jatahcuti = Jatahcuti::find($id);
        $jatahcuti->delete();

        return redirect('dashboard/jatahcuti')->with('pesan', 'Data Berhasil Dihapus');
    }
}
