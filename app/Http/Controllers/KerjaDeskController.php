<?php

namespace App\Http\Controllers;

use App\Models\Desk;
use App\Models\User;
use App\Models\Rencana;
use App\Models\Timeline;
use App\Models\KerjaDesk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KerjaDeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $kerja_desk = KerjaDesk::create($request->except(['_token']));
        Timeline::where('rencana_id', $request->rencana_id)->update([
            'kerja_desk_id' => $kerja_desk->id,
        ]);
        return redirect('/rencana/timeline/' . $request->rencana_id)->with('success', 'Data  KKA Desk berhasil diupdate!');
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
        $title = 'Data Desk';
        $ketua = User::firstWhere('level', 'Ketua SPI');
        $kerja_desk = KerjaDesk::where('id', $id)->first();
        $rencana = Rencana::where('id', $kerja_desk->rencana_id)->first();

        $substansi_kontrak_5 = false;
        $substansi_kontrak_6 = false;
        $substansi_kontrak_6_1 = false;
        $pemeriksaan_bersama_2 = false;
        $perubahan_kegiatan_1 = false;
        $pengiriman_4 = false;
        $uji_coba_barang_1 = false;
        $uji_coba_barang_2 = false;
        $uji_coba_barang_3 = false;
        $serah_terima_barang_1 = false;
        $serah_terima_barang_2 = false;
        $pembayaran_3 = false;
        $denda_1 = false;
        $penyesuaian_harga_1 = false;
        $perpanjangan_waktu_1 = false;

        if ($kerja_desk->substansi_kontrak_5 != 0) {
            $substansi_kontrak_5 = true;
        }
        if ($kerja_desk->substansi_kontrak_6 != 0) {
            $substansi_kontrak_6 = true;
        }
        if ($kerja_desk->substansi_kontrak_6_1 != 0) {
            $substansi_kontrak_6_1 = true;
        }
        if ($kerja_desk->pemeriksaan_bersama_2 != 0) {
            $pemeriksaan_bersama_2 = true;
        }
        if ($kerja_desk->perubahan_kegiatan_1 != 0) {
            $perubahan_kegiatan_1 = true;
        }
        if ($kerja_desk->pengiriman_4 != 0) {
            $pengiriman_4 = true;
        }
        if ($kerja_desk->uji_coba_barang_1 != 0) {
            $uji_coba_barang_1 = true;
        }
        if ($kerja_desk->uji_coba_barang_2 != 0) {
            $uji_coba_barang_2 = true;
        }
        if ($kerja_desk->uji_coba_barang_3 != 0) {
            $uji_coba_barang_3 = true;
        }
        if ($kerja_desk->serah_terima_barang_1 != 0) {
            $serah_terima_barang_1 = true;
        }
        if ($kerja_desk->serah_terima_barang_2 != 0) {
            $serah_terima_barang_2 = true;
        }
        if ($kerja_desk->pembayaran_3 != 0) {
            $pembayaran_3 = true;
        }
        if ($kerja_desk->denda_1 != 0) {
            $denda_1 = true;
        }
        if ($kerja_desk->penyesuaian_harga_1 != 0) {
            $penyesuaian_harga_1 = true;
        }
        if ($kerja_desk->perpanjangan_waktu_1 != 0) {
            $perpanjangan_waktu_1 = true;
        }

        // dd($substansi_kontrak_6_1);

        return view('kerja_desk.edit', compact([
            'title',
            'rencana',
            'ketua', 'kerja_desk',
            'substansi_kontrak_5',
            'substansi_kontrak_6',
            'substansi_kontrak_6_1',
            'pemeriksaan_bersama_2',
            'perubahan_kegiatan_1',
            'pengiriman_4',
            'uji_coba_barang_1',
            'uji_coba_barang_2',
            'uji_coba_barang_3',
            'serah_terima_barang_1',
            'serah_terima_barang_2',
            'pembayaran_3',
            'denda_1',
            'penyesuaian_harga_1',
            'perpanjangan_waktu_1',
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
        $kerja_desk = KerjaDesk::where('id', $id)->first();
        $rencana = $kerja_desk->rencana->id;
        // dd($rencana);
        $kerja_desk->update($request->except(['rencana_id', '_token', '_method']));

        return redirect('/rencana/timeline/' . $rencana)->with('success', 'Data  KKA Desk berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kerja_desk = KerjaDesk::where('id', $id)->first();
        $rencana = $kerja_desk->rencana->id;

        DB::beginTransaction();
        KerjaDesk::destroy($id);
        Timeline::where('kerja_desk_id', $id)->update([
            'kerja_desk_id' => NULL,
            'desk_id' => NULL,
            'konfirmasi_desk' => 0,
            'kerja_visit_id' => NULL,
            'visit_id' => NULL,
            'konfirmasi_visit' => 0,
            'berita_id' => NULL
        ]);
        DB::commit();

        return redirect('/rencana/timeline/' . $rencana)->with('success', 'Data KKA Desk berhasil dihapus!');
    }
}
