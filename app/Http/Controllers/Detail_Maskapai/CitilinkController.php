<?php

namespace App\Http\Controllers\Detail_Maskapai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitilinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.detail_maskapai.citilink.index');
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
        //
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