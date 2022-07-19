<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Visit;
use App\Models\Berita;
use App\Models\KerjaVisit;
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
        return abort(403);
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

        return redirect('/rencana/timeline/' . $validatedData['rencana_id'])->with('success', 'Data Visit berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        return abort(403);
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
            'rencana' => Rencana::where('id', $visit->kerja_visit->kerja_desk->rencana_id)->first(),
            'ketua' => User::where('level', 'Ketua SPI')->first()
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
        ];

        $validatedData = $request->validate($rules);
        Visit::where('id', $visit->id)->update($validatedData);
        Timeline::where('rencana_id', $visit->kerja_visit->kerja_desk->rencana_id)->update([
            'visit_id' => $visit->id,
        ]);

        return redirect('/rencana/timeline/' . $visit->kerja_visit->kerja_desk->rencana_id)->with('success', 'Data Visit berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        $rencana = $visit->kerja_visit->kerja_desk->rencana_id;

        DB::beginTransaction();
        Visit::destroy($visit->id);
        Timeline::where('visit_id', $visit->id)->update([
            'visit_id' => NULL,
            'konfirmasi_visit' => 0,
            'berita_id' => NULL
        ]);
        Berita::destroy('kerja_visit_id', $visit->kerja_visit_id);
        DB::commit();

        return redirect('/rencana/timeline/' . $rencana)->with('success', 'Data Visit berhasil dihapus!');
    }

    public function print($id)
    {
        $visit = Visit::where('id', $id)->first();
        $rencana = Rencana::where('id', $visit->desk->rencana_id)->first();

        return view('visit.print', [
            'title' => 'Data Visit',
            'rencana' => $rencana,
            'visit' => $visit,
            'ketua' => User::where('level', 'Ketua SPI')->first()
        ]);
    }


    public function generate($id)
    {
        $kerja_visit = KerjaVisit::where('id', $id)->first();

        $data_visit['kerja_visit_id'] = $kerja_visit->id;
        $data_visit['masa_monitoring_awal'] = $kerja_visit->kerja_desk->rencana->monitoring_awal;
        $data_visit['masa_monitoring_akhir'] = $kerja_visit->kerja_desk->rencana->monitoring_akhir;
        $data_visit['tanggal_monitoring'] = $kerja_visit->kerja_desk->rencana->tanggal_desk;

        $data_visit['penyusunan_mutu_1'] = $kerja_visit->penyusunan_mutu_5;
        $data_visit['penyusunan_mutu_2'] = $kerja_visit->penyusunan_mutu_7;
        $data_visit['pemeriksaan_1'] = $kerja_visit->pemeriksaan_bersama_2;
        $data_visit['pemeriksaan_2'] = $kerja_visit->pemeriksaan_bersama_4;
        $data_visit['perubahan_kegiatan'] = $kerja_visit->perubahan_kegiatan_3;
        $data_visit['asuransi_1'] = $kerja_visit->asuransi_2;
        $data_visit['asuransi_2'] = $kerja_visit->asuransi_4;
        $data_visit['pengiriman'] = $kerja_visit->pengiriman_5;
        $data_visit['uji_coba'] = $kerja_visit->uji_coba_4;
        $data_visit['serah_terima'] = $kerja_visit->serah_terima_4;
        $data_visit['denda'] = $kerja_visit->denda_3;
        $data_visit['perpanjangan'] = $kerja_visit->perpanjangan_2;
        $data_visit['laporan'] = $kerja_visit->laporan_3;

        $visit = Visit::where('kerja_visit_id', $id)->first();
        if ($visit == null) {
            $visit = Visit::create($data_visit);
        }

        return view('visit.generate', [
            'title' => 'Data Desk',
            'rencana' => Rencana::where('id', $visit->kerja_visit->kerja_desk->rencana_id)->first(),
            'ketua' => User::firstWhere('level', 'Ketua SPI'),
            'visit' => $visit,
        ]);
    }
}
