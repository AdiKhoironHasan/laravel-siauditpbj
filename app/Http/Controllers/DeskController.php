<?php

namespace App\Http\Controllers;

use PDF;
use Exception;
use Carbon\Carbon;
use App\Models\Desk;
use App\Models\User;
use App\Models\Rencana;
use App\Models\Timeline;
use App\Models\KerjaDesk;
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
        return abort(403);
        // $validatedData = $request->validate([
        //     'rencana_id' => 'required',
        //     'tipe_monitoring' => 'required',
        //     'masa_monitoring_awal' => 'required',
        //     'masa_monitoring_akhir' => 'required',
        //     'tanggal_monitoring' => 'required',
        //     'kontrak_1' => 'required',
        //     'kontrak_2' => 'required',
        //     'kontrak_3' => 'required',
        //     'kontrak_4' => 'required',
        //     'surat_pesanan_1' => 'required',
        //     'surat_pesanan_2' => 'required',
        //     'surat_pesanan_3' => 'required',
        //     'surat_pesanan_4' => 'required',
        //     'penyusunan_program_mutu' => 'required',
        //     'pemeriksaan_bersama' => 'required',
        //     'pembayaran_uang_muka_1' => 'required',
        //     'pembayaran_uang_muka_2' => 'required',
        //     'uji_coba_barang' => 'required',
        //     'serah_terima_barang_1' => 'required',
        //     'serah_terima_barang_2' => 'required',
        //     'catatan' => 'required',
        //     'kriteria' => 'required',
        //     'akar_penyebab' => 'required',
        //     'akibat' => 'required',
        //     'rekomendasi' => 'required',
        //     'tanggapan_auditee' => 'required',
        //     'rencana_perbaikan' => 'required',

        // ]);

        // DB::beginTransaction();
        // $desk = Desk::create($validatedData);
        // $validatedDataTimeline = ['desk_id' => $desk->id];
        // Timeline::where('rencana_id', $validatedData['rencana_id'])->update($validatedDataTimeline);
        // DB::commit();

        // return redirect('/rencana/timeline/' . $validatedData['rencana_id'])->with('success', 'Data Desk berhasil ditambahkan!');
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
            'title' => 'Kertas Data Desk',
            'rencana' => Rencana::where('id', $desk->kerja_desk->rencana_id)->first(),
            'desk' => $desk,
            'ketua' => User::firstWhere('level', 'Ketua SPI')
        ]);
    }

    public function print($id)
    {
        $desk = Desk::Where('id', $id)->first();

        return view('desk.print', [
            'title' => 'Print KDA Desk',
            'rencana' => Rencana::where('id', $desk->kerja_desk->rencana_id)->first(),
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
            // 'masa_monitoring_awal' => 'required',
            // 'masa_monitoring_akhir' => 'required',
            // 'tanggal_monitoring' => 'required',
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
            // 'catatan' => 'required',
            // 'kriteria' => 'required',
            // 'akar_penyebab' => 'required',
            // 'akibat' => 'required',
            // 'rekomendasi' => 'required',
        ];

        $validatedData = $request->validate($rules);

        try {
            Desk::where('id', $desk->id)->update($validatedData);
            Timeline::where('rencana_id', $desk->kerja_desk->rencana_id)->update([
                'desk_id' => $desk->id,
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Kertas Data Desk Gagal!');
        }

        return redirect('/rencana/timeline/' . $request->rencana_id)->with('success', 'Kertas Data Desk Berhasil Ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desk $desk)
    {
        $rencana = $desk->kerja_desk->rencana->id;

        DB::beginTransaction();
        Desk::destroy($desk->id);
        Timeline::where('desk_id', $desk->id)->update([
            'desk_id' => NULL
        ]);
        DB::commit();

        return redirect('/rencana/timeline/' . $rencana)->with('success', 'Data Desk berhasil dihapus!');
    }

    // public function print($id)
    // {

    //     $desk = Desk::where('id', $id)->first();
    //     $rencana = Rencana::where('id', $desk->rencana_id)->first();

    //     return view('desk.print', [
    //         'title' => 'Data Desk',
    //         'rencana' => $rencana,
    //         'desk' => $desk,
    //         'ketua' => User::where('level', 'Ketua SPI')->first()
    //     ]);

    //     $paper_orientation = 'landscape';
    //     $customPaper = array(0, 0, 950, 950);

    //     $pdf = PDF::loadview('desk.print', [
    //         'title' => 'Data Desk',
    //         'rencana' => $rencana,
    //         'desk' => $desk
    //     ])
    //         ->setOptions(['defaultFont' => 'sans-serif'])
    //         ->setpaper($customPaper, $paper_orientation);

    //     return $pdf->stream('contohprint.pdf');
    // }

    public function generate($id)
    {
        $kerja_desk = KerjaDesk::where('id', $id)->first();

        $data_desk['kerja_desk_id'] = $kerja_desk->id;
        $data_desk['masa_monitoring_awal'] = $kerja_desk->rencana->monitoring_awal;
        $data_desk['masa_monitoring_akhir'] = $kerja_desk->rencana->monitoring_akhir;
        $data_desk['tanggal_monitoring'] = $kerja_desk->rencana->tanggal_desk;

        $data_desk['kontrak_1'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['kontrak_2'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['kontrak_3'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['kontrak_4'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['surat_pesanan_1'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['surat_pesanan_2'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['surat_pesanan_3'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['surat_pesanan_4'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['penyusunan_program_mutu'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['pemeriksaan_bersama'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['pembayaran_uang_muka_1'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['pembayaran_uang_muka_2'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['uji_coba_barang'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['serah_terima_barang_1'] = 'SUDAH SESUAI DENGAN PERATURAN';
        $data_desk['serah_terima_barang_2'] = 'SUDAH SESUAI DENGAN PERATURAN';

        if ((Carbon::parse($kerja_desk->tanggal_kontrak)->diffInDays(Carbon::parse($kerja_desk->tanggal_sppbj))) > 14) {
            $data_desk['kontrak_1'] = 'LEBIH DARI 14 HARI SEJAK PENANDATANGANAN KONTRAK';
        }

        if (
            // $kerja_desk->substansi_kontrak_1 != 0 ||
            $kerja_desk->substansi_kontrak_2 != 0 ||
            $kerja_desk->substansi_kontrak_3 != 0 ||
            $kerja_desk->substansi_kontrak_4 != 0
        ) {
            $data_desk['kontrak_2'] = '';
            // dd('mun');
            // if ($kerja_desk->substansi_kontrak_1 != 0) {
            //     $data_desk['kontrak_2'] = $data_desk['kontrak_2'] . 'BAHASA DAN REDAKSI TIDAK SESUAI, ';
            // }
            if ($kerja_desk->substansi_kontrak_2 != 0) {
                $data_desk['kontrak_2'] = $data_desk['kontrak_2'] . 'ANGKA DAN HURUF TIDAK SESUAI, ';
            }
            if ($kerja_desk->substansi_kontrak_3 != 0) {
                $data_desk['kontrak_2'] = $data_desk['kontrak_2'] . 'TIDAK ADA PARAF SETIAP LEMBAR DOKUMEN KONTRAK, ';
            }
            if ($kerja_desk->substansi_kontrak_4 != 0) {
                $data_desk['kontrak_2'] = $data_desk['kontrak_2'] . 'TIDAK ADA MATERAI ';
            }
        }

        if ($kerja_desk->kontrak_5_1 != 0) {
            $data_desk['kontrak_3'] = 'TIDAK ADA SURAT KUASA DARI DIREKSI';
        }

        if ($kerja_desk->kontrak_6_1 != 0) {
            $data_desk['kontrak_4'] = 'ADA KETIDAKSESUAIAN HIERARKI ACUAN';
        }

        if ((Carbon::parse($kerja_desk->tanggal_surat)->diffInDays(Carbon::parse($kerja_desk->tanggal_kontrak))) > 14) {
            $data_desk['surat_pesanan_1'] = 'TANGGAL TIDAK DIISI/LEBIH DARI 14 HARI SETELAH TANGGAL KONTRAK';
        }

        if ($kerja_desk->surat_pesanan_1 != 0) {
            $data_desk['surat_pesanan_2'] = 'BELUM DI TTD PENYEDIA';
        }

        if ($kerja_desk->surat_pesanan_2 != 0) {
            $data_desk['surat_pesanan_3'] = 'BELUM ADA MATERAI';
        }

        if ((Carbon::parse($kerja_desk->tanggal_surat)->diffInDays(Carbon::parse($kerja_desk->tanggal_disetujui))) > 7) {
            $data_desk['surat_pesanan_4'] = 'LEBIH DARI 7 HARI SETELAH TANGGAL SURAT PESANAN';
        }

        if (
            $kerja_desk->penyusunan_program_mutu_1 != 1 ||
            $kerja_desk->penyusunan_program_mutu_2 != 1 ||
            $kerja_desk->penyusunan_program_mutu_3 != 1 ||
            $kerja_desk->penyusunan_program_mutu_4 != 1 ||
            $kerja_desk->penyusunan_program_mutu_5 != 1 ||
            $kerja_desk->penyusunan_program_mutu_6 != 1
        ) {
            $data_desk['penyusunan_program_mutu'] = '';

            if ($kerja_desk->penyusunan_program_mutu_1 != 1) {
                $data_desk['penyusunan_program_mutu'] = $data_desk['penyusunan_program_mutu'] . 'TIDAK ADA INFORMASI PENGADAAN BARANG, ';
            }
            if ($kerja_desk->penyusunan_program_mutu_2 != 1) {
                $data_desk['penyusunan_program_mutu'] = $data_desk['penyusunan_program_mutu'] . 'TIDAK ADA ORGANISASI KERJA PENYEDIA, ';
            }
            if ($kerja_desk->penyusunan_program_mutu_3 != 1) {
                $data_desk['penyusunan_program_mutu'] = $data_desk['penyusunan_program_mutu'] . 'TIDAK ADA JADWAL PELAKSANAAN PEKERJAAN, ';
            }
            if ($kerja_desk->penyusunan_program_mutu_4 != 1) {
                $data_desk['penyusunan_program_mutu'] = $data_desk['penyusunan_program_mutu'] . 'TIDAK ADA PROSEDUR PELAKSANAAN KEGIATAN, ';
            }
            if ($kerja_desk->penyusunan_program_mutu_5 != 1) {
                $data_desk['penyusunan_program_mutu'] = $data_desk['penyusunan_program_mutu'] . 'TIDAK ADA PROSEDUR INSTRUKSI KERJA, ';
            }
            if ($kerja_desk->penyusunan_program_mutu_6 != 1) {
                $data_desk['penyusunan_program_mutu'] = $data_desk['penyusunan_program_mutu'] . 'TIDAK ADA PELAKSANAAN KERJA';
            }
        }

        if ($kerja_desk->pemeriksaan_bersama_1 != 1) {
            $data_desk['pemeriksaan_bersama'] = 'TIDAK DILAKUKAN  ATAU TIDAK ADA BERITA ACARA';
        }
        if ($kerja_desk->jaminan_uang_muka > 0) {
            if ((($kerja_desk->jaminan_uang_muka / $kerja_desk->uang_muka) * 100) < 5) {
                $data_desk['pembayaran_uang_muka_1'] = 'BESARAN UANG MUKA TIDAK SESUAI';
            }
        }

        if ($kerja_desk->keterangan_jaminan_uang_muka != null) {
            if ($kerja_desk->keterangan_jaminan_uang_muka == 'Tidak Sesuai') {
                $data_desk['pembayaran_uang_muka_2'] = 'BESARAN JAMINAN UANG MUKA TIDAK SESUAI';
            }
        }

        if ($kerja_desk->uji_coba_barang_1 != 1) {
            $data_desk['uji_coba_barang'] = 'PENYEDIA TIDAK MELAKUKAN UJI COBA BARANG';
        }

        if ($kerja_desk->serah_terima_barang_1_1 != 1) {
            $data_desk['serah_terima_barang_1'] = 'BAST HASIL PEKERJAAN TIDAK ADA';
        }

        if ($kerja_desk->serah_terima_barang_3 != 1) {
            $data_desk['serah_terima_barang_2'] = 'WAKTU PENERIMAAN BARAG MELEBIHI WAKTU YANG TERTERA DI KONTRAK';
        }

        $desk = Desk::where('kerja_desk_id', $id)->first();

        if ($desk == null) {
            $desk = Desk::create($data_desk);
        }
        // Timeline::where('kerja_desk_id', $id)->update([
        //     'desk_id' => $desk->id,
        // ]);

        return view('desk.generate', [
            'title' => 'Kertas Data Desk',
            'rencana' => Rencana::where('id', $desk->kerja_desk->rencana_id)->first(),
            'ketua' => User::firstWhere('level', 'Ketua SPI'),
            'desk' => $desk,
        ]);
    }
}
