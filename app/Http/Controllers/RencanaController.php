<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Rencana;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class RencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rencana', [
            'title' => 'Rencana Kerja Audit',
            'rencanas' => Rencana::all(),
            'barangs' => Barang::all(),
            'auditors' => User::where('level', 'Ketua SPI')->orWhere('level', 'Auditor')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'barang_id' => 'required',
            'auditor1_id' => 'required',
            'auditor2_id' => 'required',
            'auditor3_id' => 'required',
            'tahun' => 'required',
            'tanggal' => 'required',
        ]);

        $validatedData['status'] = 'Belum Terlaksana';

        Rencana::create($validatedData);

        return redirect('/rencana')->with('success', 'Rencana Kerja Audit berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function show(Rencana $rencana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function edit(Rencana $rencana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rencana $rencana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rencana $rencana)
    {
        //
    }
}
