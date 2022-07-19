<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
use App\Models\Barang;
use App\Models\Rencana;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Builder;

class RencanaController extends Controller
{

    // public $coba = 1;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Gate::denies('auditee')) {
        // $barang = DB::table('barangs')
        //     ->whereNotExists(function ($query) {
        //         $query->select(DB::raw(1))
        //             ->from('rencanas')
        //             ->whereColumn('rencanas.barang_id', '=', 'barangs.id');
        //     })
        //     ->get();
        $rencana = Rencana::all();
        // } else {
        // $barang = DB::table('barangs')
        //     ->whereNotExists(function ($query) {
        //         $query->select(DB::raw(1))
        //             ->from('rencanas')
        //             ->whereColumn('rencanas.barang_id', '=', 'barangs.id');
        //     })
        //     ->where('unit_id', Auth::user()->unit->first()->id)
        //     ->get();
        // $rencana = Rencana::whereHas('barang', function (Builder $qr) {
        //     $qr->where('unit_id', Auth::user()->unit->first()->id);
        // })->get();
        // }

        return view('rencana', [
            'title' => 'Rencana Kerja Audit',
            'rencanas' => $rencana,
            'auditees' => User::where('level', 'Auditee')->get(),
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
        return abort(403);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');

        $validatedData = $request->validate([
            'auditor1_id' => 'required',
            'auditor2_id' => 'required',
            'auditor3_id' => 'required',
            'auditee_id' => 'required',
            'monitoring_awal' => 'required',
            'monitoring_akhir' => 'required',
            'tanggal_desk' => 'required',
            'tanggal_visit' => 'required',
            'tahun' => 'required',
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
        return abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function edit(Rencana $rencana)
    {
        return abort(403);
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
        if (Gate::any(['admin', 'auditor'])) {

            $rules = [
                'auditor1_id' => 'required',
                'auditor2_id' => 'required',
                'auditor3_id' => 'required',
                'auditee_id' => 'required',
                'monitoring_awal' => 'required',
                'monitoring_akhir' => 'required',
                'tanggal_desk' => 'required',
                'tanggal_visit' => 'required',
                'tahun' => 'required',
            ];

            $validatedData = $request->validate($rules);

            Rencana::where('id', $rencana->id)->update($validatedData);

            return redirect('/rencana')->with('success', 'Data Rencana Kerja Audit berhasil diubah!');
        }
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
        Timeline::destroy('rencana_id', $rencana->id);
        DB::commit();

        return redirect('/rencana')->with('success', 'Rencana Kerja Audit berhasil dihapus!');
    }
}
