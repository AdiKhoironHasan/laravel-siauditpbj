<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Desk;
use App\Models\User;
use App\Models\Rencana;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $validatedData = $request->validate([
            'rencana_id' => 'required',
            'tipe_monitoring' => 'required',
            'masa_monitoring_awal' => 'required',
            'masa_monitoring_akhir' => 'required',
            'tanggal_monitoring' => 'required',
            'kontrak_1' => 'required',
            'kontrak_2' => 'required',
            'kontrak_3' => 'required',
            'kontrak_4' => 'required',
            'surat_pesanan_1' => 'required',
            'surat_pesanan_2' => 'required',
            'surat_pesanan_3' => 'required',
            'surat_pesanan_4' => 'required',
            'penyusunan_program_mutu' => 'required',
            'pemeriksaan_bersama' => 'required',
            'pembayaran_uang_muka_1' => 'required',
            'pembayaran_uang_muka_2' => 'required',
            'uji_coba_barang' => 'required',
            'serah_terima_barang_1' => 'required',
            'serah_terima_barang_2' => 'required',
            'catatan' => 'required',
            'kriteria' => 'required',
            'akar_penyebab' => 'required',
            'akibat' => 'required',
            'rekomendasi' => 'required',
            'tanggapan_auditee' => 'required',
            'rencana_perbaikan' => 'required',

        ]);

        DB::beginTransaction();
        $desk = Desk::create($validatedData);
        $validatedDataTimeline = ['desk_id' => $desk->id];
        Timeline::where('rencana_id', $validatedData['rencana_id'])->update($validatedDataTimeline);
        DB::commit();

        return redirect('/timeline/' . $validatedData['rencana_id'])->with('success', 'Data Desk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function show(Desk $desk)
    {
        return abort(403);

        // return view('desk.index',[
        //     'title' => 'Data Desk',
        //     'desk' => $desk
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function edit(Desk $desk)
    {
        return view('desk.edit', [
            'title' => 'Data Desk',
            'rencana' => Rencana::where('id', $desk->rencana_id)->first(),
            'desk' => $desk,
            'ketua' => User::firstWhere('level', 'Ketua SPI')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desk $desk)
    //Desk adalah row desk lama
    //request adalah form data baru

    {
        $rules = [
            'tipe_monitoring' => 'required',
            'masa_monitoring_awal' => 'required',
            'masa_monitoring_akhir' => 'required',
            'tanggal_monitoring' => 'required',
            'kontrak_1' => 'required',
            'kontrak_2' => 'required',
            'kontrak_3' => 'required',
            'kontrak_4' => 'required',
            'surat_pesanan_1' => 'required',
            'surat_pesanan_2' => 'required',
            'surat_pesanan_3' => 'required',
            'surat_pesanan_4' => 'required',
            'penyusunan_program_mutu' => 'required',
            'pemeriksaan_bersama' => 'required',
            'pembayaran_uang_muka_1' => 'required',
            'pembayaran_uang_muka_2' => 'required',
            'uji_coba_barang' => 'required',
            'serah_terima_barang_1' => 'required',
            'serah_terima_barang_2' => 'required',
            'catatan' => 'required',
            'kriteria' => 'required',
            'akar_penyebab' => 'required',
            'akibat' => 'required',
            'rekomendasi' => 'required',
            'tanggapan_auditee' => 'required',
            'rencana_perbaikan' => 'required',
        ];

        $validatedData = $request->validate($rules);

        // dd($desk);

        Desk::where('id', $desk->id)->update($validatedData);

        return redirect('/timeline/' . $request->rencana_id)->with('success', 'Data Desk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desk $desk)
    {
        $rencana = $desk->rencana->id;

        DB::beginTransaction();
        Desk::destroy($desk->id);
        Timeline::where('desk_id', $desk->id)->update([
            'desk_id' => NULL,
            'visit_id' => NULL
        ]);
        DB::commit();

        return redirect('/timeline/' . $rencana)->with('success', 'Data Desk berhasil dihapus!');
    }

    public function print($id)
    {

        $desk = Desk::where('id', $id)->first();
        $rencana = Rencana::where('id', $desk->rencana_id)->first();

        return view('desk.print', [
            'title' => 'Data Desk',
            'rencana' => $rencana,
            'desk' => $desk,
            'ketua' => User::where('level', 'Ketua SPI')->first()
        ]);

        $paper_orientation = 'landscape';
        $customPaper = array(0, 0, 950, 950);

        $pdf = PDF::loadview('desk.print', [
            'title' => 'Data Desk',
            'rencana' => $rencana,
            'desk' => $desk
        ])
            ->setOptions(['defaultFont' => 'sans-serif'])
            ->setpaper($customPaper, $paper_orientation);

        return $pdf->stream('contohprint.pdf');
    }
}
