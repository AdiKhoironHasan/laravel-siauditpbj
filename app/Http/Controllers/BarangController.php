<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('barang', [
            'title' => 'Paket Barang',
            'barangs' => Barang::all(),
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
            'unit_id' => 'required',
            'nama' => 'required',
            'no_kontrak' => 'required|unique:barangs',
            'tgl_kontrak' => 'required',
            'nilai_kontrak' => 'required|min:3',
            'tahun_anggaran' => 'required'
        ]);

        Barang::create($validatedData);

        return redirect('/barang')->with('success', 'Paket Barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        // dd($request);
        $rules = [
            'unit_id' => 'required',
            'nama' => 'required|min:2',
            'tgl_kontrak' => 'required',
            'nilai_kontrak' => 'required|min:3',
            'tahun_anggaran' => 'required'
        ];

        // $barang = Barang::where('id', $request->id);

        if ($request->no_kontrak != $barang->no_kontrak) {
            $rules['no_kontrak'] = 'required|unique:barangs|';
        }

        $validatedData = $request->validate($rules);
        // $validatedData['unit_id'] = $request->unit_id;

        Barang::where('id', $request->id)->update($validatedData);

        return redirect('/barang')->with('success', 'Data Barang berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);

        return redirect('/barang')->with('success', 'Paket Barang berhasil dihapus!');
    }
}
