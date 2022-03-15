<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Rencana;
use App\Models\Unit;
use App\Models\User;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = DB::table('barangs')
        ->whereNotExists(function($query){
            $query->select(DB::raw(1))
                  ->from('rencanas')
                  ->whereColumn('rencanas.barang_id','=','barangs.id');
        })
        ->get();

        // SELECT * FROM TableA a
        // WHERE a.city NOT IN(SELECT city FROM TableB)

        // $users = DB::table('users')
        // ->whereExists(function ($query) {
        //     $query->select(DB::raw(1))
        //           ->from('orders')
        //           ->whereColumn('orders.user_id', 'users.id');
        // })
        // ->get();
        
// dd($barang);
        return view('rencana', [
            'title' => 'Rencana Kerja Audit',
            'rencanas' => Rencana::all(),
            'barangs' => $barang,
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
            'barang_id' => 'required|unique:rencanas',
            'auditor1_id' => 'required',
            'auditor2_id' => 'required',
            'auditor3_id' => 'required',
            'tahun' => 'required',
            'tanggal' => 'required',
        ]);

        $validatedData['status'] = 'Belum Terlaksana';

        DB::beginTransaction();
        $rencana = Rencana::create($validatedData);
        Timeline::create([
            'rencana_id' => $rencana->id,
        ]);
        DB::commit();
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
        $rules = [
            'barang_id' => 'required',
            'auditor1_id' => 'required',
            'auditor2_id' => 'required',
            'auditor3_id' => 'required',
            'tahun' => 'required',
            'tanggal' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Rencana::where('id', $rencana->id)->update($validatedData);

        return redirect('/rencana')->with('success', 'Data Rencana Kerja Audit berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rencana $rencana)
    {
        DB::beginTransaction();
        Rencana::destroy($rencana->id);
        Timeline::where('rencana_id', $rencana->id)->delete();
        DB::commit();

        return redirect('/rencana')->with('success', 'Rencana Kerja Audit berhasil dihapus!');
    }
}
