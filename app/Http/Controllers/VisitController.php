<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Rencana;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $rules = [
            'rencana_id' => 'required',
            'desk_id' => 'required',
            'tipe_monitoring' => 'required',
            'masa_monitoring_awal' => 'required',
            'masa_monitoring_akhir' => 'required',
            'tanggal_monitoring' => 'required',
            'penyusunan_mutu_1' => 'required',
            'penyusunan_mutu_2' => 'required',
            'pemeriksaan_1' => 'required',
            'pemeriksaan_2' => 'required',
            'perubahan_kegiatan' => 'required',
            'asuransi_1' => 'required',
            'asuransi_2' => 'required',
            'pengiriman' => 'required',
            'uji_coba' => 'required',
            'serah_terima' => 'required',
            'denda' => 'required',
            'perpanjangan' => 'required',
            'laporan' => 'required',
            'catatan' => 'required',
            'kriteria' => 'required',
            'akar_penyebab' => 'required',
            'akibat' => 'required',
            'rekomendasi' => 'required',
            'tanggapan_auditee' => 'required',
            'rencana_perbaikan' => 'required',
        ];

        $validatedData = $request->validate($rules);

        DB::beginTransaction();
        $visit = Visit::create($validatedData);
        $validatedDataTimeline = ['visit_id' => $visit->id];
        Timeline::where('rencana_id', $validatedData['rencana_id'])->update($validatedDataTimeline);
        DB::commit();

        return redirect('/timeline/' . $validatedData['rencana_id'])->with('success', 'Data Visit berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
        return view('visit.edit', [
            'title' => 'Data Visit',
            'visit' => $visit,
            'rencana' => Rencana::where('id', $visit->desk->rencana_id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        $rules = [
            'tipe_monitoring' => 'required',
            'masa_monitoring_awal' => 'required',
            'masa_monitoring_akhir' => 'required',
            'tanggal_monitoring' => 'required',
            'penyusunan_mutu_1' => 'required',
            'penyusunan_mutu_2' => 'required',
            'pemeriksaan_1' => 'required',
            'pemeriksaan_2' => 'required',
            'perubahan_kegiatan' => 'required',
            'asuransi_1' => 'required',
            'asuransi_2' => 'required',
            'pengiriman' => 'required',
            'uji_coba' => 'required',
            'serah_terima' => 'required',
            'denda' => 'required',
            'perpanjangan' => 'required',
            'laporan' => 'required',
            'catatan' => 'required',
            'kriteria' => 'required',
            'akar_penyebab' => 'required',
            'akibat' => 'required',
            'rekomendasi' => 'required',
            'tanggapan_auditee' => 'required',
            'rencana_perbaikan' => 'required',
        ];

        $validatedData = $request->validate($rules);
        Visit::where('id', $visit->id)->update($validatedData);

        return redirect('/timeline/' . $visit->desk->rencana_id)->with('success', 'Data Visit berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        $rencana = $visit->desk->rencana_id;

        DB::beginTransaction();
        Visit::destroy($visit->id);
        Timeline::where('visit_id', $visit->id)->update(['visit_id' => NULL]);
        DB::commit();

        return redirect('/timeline/' . $rencana)->with('success', 'Data Visit berhasil dihapus!');
    }

    public function print($id){
        $visit = Visit::where('id', $id)->first();
        $rencana = Rencana::where('id', $visit->desk->rencana_id)->first();

        return view('visit.print', [
            'title' => 'Data Visit',
            'rencana' => $rencana,
            'visit' => $visit
        ]);

    }
}
