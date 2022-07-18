<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rencana;
use App\Models\Timeline;
use App\Models\KerjaVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KerjaVisitController extends Controller
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
        $kerja_visit = KerjaVisit::create($request->except(['rencana_id', '_token']));
        Timeline::where('rencana_id', $request->rencana_id)->update([
            'kerja_visit_id' => $kerja_visit->id,
        ]);
        return redirect('/rencana/timeline/' . $request->rencana_id)->with('success', 'Data  KKA Visit berhasil diupdate!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'KKA Visit';
        $ketua = User::firstWhere('level', 'Ketua SPI');
        $kerja_visit = KerjaVisit::where('id', $id)->first();
        $rencana = Rencana::where('id', $kerja_visit->kerja_desk->rencana_id)->first();

        $penyusunan_mutu_4 = false;
        $penyusunan_mutu_6 = false;
        $pemeriksaan_bersama_1 = false;
        $pemeriksaan_bersama_3 = false;
        $perubahan_kegiatan_1 = false;
        $uji_coba_1 = false;
        $uji_coba_2 = false;
        $uji_coba_3 = false;
        $denda_1 = false;
        $asuransi_1 = false;
        $pengiriman_3 = false;
        $pengiriman_4 = false;
        $serah_terima_3 = false;
        $perpanjangan_1 = false;

        if ($kerja_visit->penyusunan_mutu_4 != 0) {
            $penyusunan_mutu_4 = true;
        }
        if ($kerja_visit->penyusunan_mutu_6 != 0) {
            $penyusunan_mutu_6 = true;
        }
        if ($kerja_visit->pemeriksaan_bersama_1 != 0) {
            $pemeriksaan_bersama_1 = true;
        }
        if ($kerja_visit->pemeriksaan_bersama_3 != 0) {
            $pemeriksaan_bersama_3 = true;
        }
        if ($kerja_visit->perubahan_kegiatan_1 != 0) {
            $perubahan_kegiatan_1 = true;
        }
        if ($kerja_visit->uji_coba_1 != 0) {
            $uji_coba_1 = true;
        }
        if ($kerja_visit->uji_coba_2 != 0) {
            $uji_coba_2 = true;
        }
        if ($kerja_visit->uji_coba_3 != 0) {
            $uji_coba_3 = true;
        }
        if ($kerja_visit->denda_1 != 0) {
            $denda_1 = true;
        }
        if ($kerja_visit->asuransi_1 != 0) {
            $asuransi_1 = true;
        }
        if ($kerja_visit->pengiriman_3 != 0) {
            $pengiriman_3 = true;
        }
        if ($kerja_visit->pengiriman_4 != 0) {
            $pengiriman_4 = true;
        }
        if ($kerja_visit->serah_terima_3 != 0) {
            $serah_terima_3 = true;
        }
        if ($kerja_visit->perpanjangan_1 != 0) {
            $perpanjangan_1 = true;
        }

        return view('kerja_visit.edit', compact([
            'title',
            'rencana',
            'ketua',
            'kerja_visit',
            'penyusunan_mutu_4',
            'penyusunan_mutu_6',
            'pemeriksaan_bersama_1',
            'pemeriksaan_bersama_3',
            'perubahan_kegiatan_1',
            'uji_coba_1',
            'uji_coba_2',
            'uji_coba_3',
            'denda_1',
            'asuransi_1',
            'pengiriman_3',
            'pengiriman_4',
            'serah_terima_3',
            'perpanjangan_1',
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $kerja_visit = KerjaVisit::where('id', $id)->first();
        $rencana = $request->rencana_id;
        // dd($rencana);
        $kerja_visit->update($request->except(['rencana_id', '_token', '_method', 'kerja_desk_id']));

        return redirect('/rencana/timeline/' . $rencana)->with('success', 'Data  KKA Visit berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kerja_visit = KerjaVisit::where('id', $id)->first();
        $rencana = $kerja_visit->kerja_desk->rencana->id;

        DB::beginTransaction();
        KerjaVisit::destroy($id);
        Timeline::where('kerja_visit_id', $id)->update([
            'kerja_visit_id' => NULL,
            'visit_id' => NULL
        ]);
        DB::commit();

        return redirect('/rencana/timeline/' . $rencana)->with('success', 'Data KKA Visit berhasil dihapus!');
    }
}
