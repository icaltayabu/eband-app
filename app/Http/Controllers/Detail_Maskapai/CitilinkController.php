<?php

namespace App\Http\Controllers\Detail_Maskapai;

use App\Http\Controllers\Controller;
use App\Models\Penerbangan;
use Illuminate\Http\Request;

class CitilinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerbangan = Penerbangan::paginate('3');
        return view('pages.detail_maskapai.citilink.index', compact('penerbangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tgl_penerbangan' => '',
            'jam_terbang' => '',
            'kode_penerbangan' => '',
            'asal' => '',
            'tujuan' => '',
            'terminal' => '',
            'pengingat' => ''
        ]);

        Penerbangan::create($validatedData);

        return redirect()->route('kelas_citilink.index')
            ->with('success', 'Data penerbangan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function kelas_reguler()
    {
        return view('pages.detail_maskapai.citilink.kelas_reguler');
    }

    public function kelas_vip()
    {
        return view('pages.detail_maskapai.citilink.kelas_vip');
    }
}
