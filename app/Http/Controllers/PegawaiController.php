<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pegawai = Pegawai::all();
        return view('admin.pegawai.index', compact('list_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi Input
        $validated = $request->validate([
            'nip' => 'required|string',
            'gender' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'telpon' => 'required|string',
            'alamat' => 'required|string',
            'divisi_id' => 'required|string'
        ]);
        //menyimpan
        pegawai::create($validated);
        return redirect('dashboard/pegawai')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
// Controller
    public function show(string $id)
    { {
            $pegawai = Pegawai::where('nip', $id)->first();
            return view('admin.pegawai.show', compact('pegawai'));
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pegawai = Pegawai::find($id);
        return view('admin.pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi form input
        $validated = $request->validate([
            'nip' => 'required|string',
            'gender' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'telpon' => 'required|string',
            'alamat' => 'required|string',
            'divisi_id' => 'required|string'
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->update($validated);

        return redirect('dashboard/pegawai')->with('pesan', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::where('nip', $id)->first();
        $pegawai->delete();

        return redirect('dashboard/pegawai')->with('pesan', 'Data Berhasil Dihapus');
    }
}
