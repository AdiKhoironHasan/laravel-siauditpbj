@extends('layouts.print.main')

@section('content')
<style>
    input {
        padding-left: 20px;
    }
</style>
{{-- <div class="card card-orange">
    <div class="card-header" style="color: white; border-color:transparent">
        <h3 class="card-title">Daftar Data Desk</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body"> --}}
        {{-- <form action="/rencana/timeline/kerjadesk/{{ $kerja_desk->id }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="rencana_id" id="rencana_id" value="{{ $rencana->id }}"> --}}
            {{--
            <input type="checkbox" name="A" id="A" value="1">A
            <br>
            <input type="checkbox" name="B" id="B" class="B" value="1" disabled>B
            <br>
            <input type="checkbox" name="C" id="C" class="C" value="1" disabled>C --}}
            <table class="table border border-primary">
                <tr style="border-top:3px solid #000">
                    <td style="width: 30%;" class="align-middle" rowspan="2">
                        <img src="/uploads/default/logo_pnc.png" style="width: 100px; height: 100px">
                        <br><strong>SPI</strong>
                    </td>
                    <td class="align-bottom"><strong>KERTAS KERJA AUDIT (KKA)</strong></td>
                </tr>
                <tr>
                    <td>DESK EVALUATION</td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <td style="width: 40%;text-align:left">UNIT KERJA</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="unit_kerja" name="unit_kerja"
                            value="{{ $kerja_desk->unit_kerja }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TAHNUN ANGGARAN</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="number" id="tahun" name="tahun" value="{{ $kerja_desk->tahun }}"
                            required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NAMA PAKET</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="nama_paket" name="nama_paket"
                            value="{{ $kerja_desk->nama_paket }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NOMOR KONTRAK</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="no_kontrak" name="no_kontrak"
                            value="{{ $kerja_desk->no_kontrak }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NILAI KONTRAK</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="integer" id="nilai_kontrak" name="nilai_kontrak"
                            value="{{ $kerja_desk->nilai_kontrak }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TANGGAL KONTRAK</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="tanggal_kontrak" name="tanggal_kontrak"
                            onfocus="(this.type='date')" value="{{ $kerja_desk->tanggal_kontrak }}" required>
                    </td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <th colspan="2" style="width: 40%; text-align:left">A. IDENTITAS PAKET</th>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NAMA PENYEDIA</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="nama_penyedia" name="nama_penyedia"
                            value="{{ $kerja_desk->nama_penyedia }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NILAI HPS</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="nilai_hps" name="nilai_hps"
                            value="{{ $kerja_desk->nilai_hps }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NILAI PENAWARAN</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="nilai_penawaran" name="nilai_penawaran"
                            value="{{ $kerja_desk->nilai_penawaran }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">METODE PENILAIAN KUALIFIKASI</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="metode_penilaian" name="metode_penilaian"
                            value="{{ $kerja_desk->metode_penilaian }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">METODE PEMILIHAN PENGADAAN BARANG</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="metode_pemilihan" name="metode_pemilihan"
                            value="{{ $kerja_desk->metode_pemilihan }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">METODE PENYAMPAIAN DOKUMEN</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="metode_penyampaian" name="metode_penyampaian"
                            value="{{ $kerja_desk->metode_penyampaian }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">METODE EVALUASI PENAWARAN</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="metode_evaluasi" name="metode_evaluasi"
                            value="{{ $kerja_desk->metode_evaluasi }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">JAMINAN PELAKSANAAN</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="jaminan_pelaksanaan" name="jaminan_pelaksanaan"
                            value="{{ $kerja_desk->jaminan_pelaksanaan }}">
                    </td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 40%;text-align:left">MASA KONTRAK</td>
                    <td class="align-bottom d-flex justify-content-end">
                        <input type="text" id="masa_kontrak_1" name="masa_kontrak_1" placeholder=""
                            value="{{ $kerja_desk->masa_kontrak_1 }}" onfocus="(this.type='date')" required>
                    </td>
                    <td style="width: 5%">SD</td>
                    <td class="align-bottom d-flex justify-content-start">
                        <input type="text" id="masa_kontrak_2" name="masa_kontrak_2" placeholder=""
                            value="{{ $kerja_desk->masa_kontrak_2 }}" onfocus="(this.type='date')" required>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left">MASA JAMINAN PELAKSANAAN</td>

                    <td class="align-bottom d-flex justify-content-end">
                        <input type="text" id="masa_jaminan_1" name="masa_jaminan_1" placeholder=""
                            value="{{ $kerja_desk->masa_jaminan_1 }}" onfocus="(this.type='date')">
                    </td>
                    <td>SD</td>

                    <td class="align-bottom d-flex justify-content-start">
                        <input type="text" id="masa_jaminan_2" name="masa_jaminan_2" placeholder=""
                            value="{{ $kerja_desk->masa_jaminan_2 }}" onfocus="(this.type='date')">
                    </td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 40%;text-align:left">TANGGAL SP2D</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="tanggal_sp2d" name="tanggal_sp2d"
                            value="{{ $kerja_desk->tanggal_sp2d }}" placeholder="" onfocus="(this.type='date')"
                            required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NOMOR ADENDUM</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="no_adendum" name="no_adendum"
                            value="{{ $kerja_desk->no_adendum }}" required>
                    </td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <th colspan="2" style="width: 40%; text-align:left">B. PENANDATANGANAN KONTRAK</th>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TANGGAL SPPBJ</td>
                    <td>
                        <input style="width: 80%" type="text" id="tanggal_sppbj" name="tanggal_sppbj"
                            value="{{ $kerja_desk->tanggal_sppbj }}" onfocus="(this.type='date')" required>
                    </td>
                </tr>
                <br>
                <br>
                <br>
                <tr>
                    <td colspan="2" style="width: 40%;text-align:left">SUBSTANSI KONTRAK</td>
                </tr>
            </table>

            <table class="table table-borderless">
                {{-- <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="substansi_kontrak_1" id="substansi_kontrak_1" value="1" {{
                            $kerja_desk->substansi_kontrak_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">BAHASA DAN REDAKSIONAL</td>
                </tr> --}}
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="substansi_kontrak_2" id="substansi_kontrak_2" value="1" {{
                            $kerja_desk->substansi_kontrak_2 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">ANGKA DAN HURUF SESUAI</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="substansi_kontrak_3" id="substansi_kontrak_3" value="1" {{
                            $kerja_desk->substansi_kontrak_3 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">TERDAPAT PARAF PADA SETIAP LEMBAR DOKUMEN KONTRAK</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="substansi_kontrak_4" id="substansi_kontrak_4" value="1" {{
                            $kerja_desk->substansi_kontrak_4 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">ADA MATERAI</td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="substansi_kontrak_5" id="substansi_kontrak_5" value="1" {{
                            $substansi_kontrak_5 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">KONTRAK DITANDATANGANI PIHAK DIREKSI PENYEDIA</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->substansi_kontrak_5_1 == 0)
                        @if ($substansi_kontrak_5)
                        <input type="checkbox" name="substansi_kontrak_5_1" id="substansi_kontrak_5_1" value="1">
                        @else
                        <input type="checkbox" name="substansi_kontrak_5_1" id="substansi_kontrak_5_1" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="substansi_kontrak_5_1" id="substansi_kontrak_5_1" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">ADA SURAT KUASA DARI PIHAK DIREKSI KEPADA PENANDA TANGAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="substansi_kontrak_6" id="substansi_kontrak_6" value="1" {{
                            $substansi_kontrak_6 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">TERDAPAT PERTENTANGAN ANTAR BAGIAN KONTRAK</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->substansi_kontrak_6_1 == 0)
                        @if ($substansi_kontrak_6)
                        <input type="checkbox" name="substansi_kontrak_6_1" id="substansi_kontrak_6_1" value="1">
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1" id="substansi_kontrak_6_1" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1" id="substansi_kontrak_6_1" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">KESESUAIAN HIARARKI ACUAN</td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        @if ($kerja_desk->substansi_kontrak_6_1_1 == 0)
                        @if ($substansi_kontrak_6_1)
                        <input type="checkbox" name="substansi_kontrak_6_1_1" id="substansi_kontrak_6_1_1" value="1">
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_1" id="substansi_kontrak_6_1_1" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_1" id="substansi_kontrak_6_1_1" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="text-align: left">1. Adendum Surat Perjanjian</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        @if ($kerja_desk->substansi_kontrak_6_1_2 == 0)
                        @if ($substansi_kontrak_6_1)
                        <input type="checkbox" name="substansi_kontrak_6_1_2" id="substansi_kontrak_6_1_2" value="1">
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_2" id="substansi_kontrak_6_1_2" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_2" id="substansi_kontrak_6_1_2" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="text-align: left">2. Pokok Perjanjian</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        @if ($kerja_desk->substansi_kontrak_6_1_3 == 0)
                        @if ($substansi_kontrak_6_1)
                        <input type="checkbox" name="substansi_kontrak_6_1_3" id="substansi_kontrak_6_1_3" value="1">
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_3" id="substansi_kontrak_6_1_3" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_3" id="substansi_kontrak_6_1_3" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="text-align: left">3. Surat Penawaran, beserta rincian penawaran biaya</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        @if ($kerja_desk->substansi_kontrak_6_1_4 == 0)
                        @if ($substansi_kontrak_6_1)
                        <input type="checkbox" name="substansi_kontrak_6_1_4" id="substansi_kontrak_6_1_4" value="1">
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_4" id="substansi_kontrak_6_1_4" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_4" id="substansi_kontrak_6_1_4" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="text-align: left">4. Syarat-syarat khusus kontrak</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        @if ($kerja_desk->substansi_kontrak_6_1_5 == 0)
                        @if ($substansi_kontrak_6_1)
                        <input type="checkbox" name="substansi_kontrak_6_1_5" id="substansi_kontrak_6_1_5" value="1">
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_5" id="substansi_kontrak_6_1_5" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_5" id="substansi_kontrak_6_1_5" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="text-align: left">5. Syarat-syarat Umum Kontrak</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        @if ($kerja_desk->substansi_kontrak_6_1_6 == 0)
                        @if ($substansi_kontrak_6_1)
                        <input type="checkbox" name="substansi_kontrak_6_1_6" id="substansi_kontrak_6_1_6" value="1">
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_6" id="substansi_kontrak_6_1_6" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_6" id="substansi_kontrak_6_1_6" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="text-align: left">6. Kerangka acuan Kerja</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        @if ($kerja_desk->substansi_kontrak_6_1_7 == 0)
                        @if ($substansi_kontrak_6_1)
                        <input type="checkbox" name="substansi_kontrak_6_1_7" id="substansi_kontrak_6_1_7" value="1">
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_7" id="substansi_kontrak_6_1_7" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="substansi_kontrak_6_1_7" id="substansi_kontrak_6_1_7" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="text-align: left">7. Dokumen lainnya; Data Teknis lainnya, Gambar, SPPBJ, BAHS, BAPP
                    </td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <th colspan="2" style="width: 40%; text-align:left">C. PELAKSANAAN KONTRAK PENGADAAN BARANG</th>
                </tr>
                <tr>
                    <td colspan="2" style="width: 40%;text-align:left">1. SURAT PESANAN (SP)</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TANGGAL SURAT PESANAN</td>
                    <td>
                        <input style="width: 80%" type="text" id="tanggal_surat" name="tanggal_surat"
                            value="{{ $kerja_desk->tanggal_surat }}" onfocus="(this.type='date')" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">DURASI PENERIMAAN BARANG</td>
                    <td>
                        <input style="width: 80%" type="text" id="durasi_penerimaan" name="durasi_penerimaan"
                            value="{{ $kerja_desk->durasi_penerimaan }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TANGGAL DISETUJUI/DITANDATANGANI</td>
                    <td>
                        <input style="width: 80%" type="text" id="tanggal_disetujui" name="tanggal_disetujui"
                            value="{{ $kerja_desk->tanggal_disetujui }}" onfocus="(this.type='date')" required>
                    </td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="surat_pesanan_1" id="surat_pesanan_1" value="1" {{
                            $kerja_desk->surat_pesanan_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">SUDAH DITANDATANGANI OLEH PENYEDIA</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="surat_pesanan_2" id="surat_pesanan_2" value="1" {{
                            $kerja_desk->surat_pesanan_2 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">MATERAI RP. 6000,-</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left">2. PENYUSUNAN PROGRAM MUTU</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left">
                        PROGRAM MUTU YANG DISUSUN OLEH PENYEDIA BERISI:
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_program_mutu_1" id="penyusunan_program_mutu_1" value="1"
                            {{ $kerja_desk->penyusunan_program_mutu_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">1. Informasi Pengadaan Barang</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_program_mutu_2" id="penyusunan_program_mutu_2" value="1"
                            {{ $kerja_desk->penyusunan_program_mutu_2 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">2. Organisasi Kerja Penyedia</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_program_mutu_3" id="penyusunan_program_mutu_3" value="1"
                            {{ $kerja_desk->penyusunan_program_mutu_3 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">3. Jadwal Pelaksanaan Pekerjaan</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_program_mutu_4" id="penyusunan_program_mutu_4" value="1"
                            {{ $kerja_desk->penyusunan_program_mutu_4 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">4. Prosedur Pelaksanaan Kegiatan</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_program_mutu_5" id="penyusunan_program_mutu_5" value="1"
                            {{ $kerja_desk->penyusunan_program_mutu_5 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">5. Prosedur Instruksi Kerja</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_program_mutu_6" id="penyusunan_program_mutu_6" value="1"
                            {{ $kerja_desk->penyusunan_program_mutu_6 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">6. Pelaksanaan Kerja</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_program_mutu_7" id="penyusunan_program_mutu_7" value="1"
                            {{ $kerja_desk->penyusunan_program_mutu_7 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">TERDAPAT REVISI PROGRAM MUTU</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left">3. PEMERIKSAAN BERSAMA</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pemeriksaan_bersama_1" id="pemeriksaan_bersama_1" value="1" {{
                            $kerja_desk->pemeriksaan_bersama_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">
                        PEMERIKSAAN KONDISI LAPANGAN OLEH PPK DENGAN PENYEDIA PADA TAHAP
                        AWAL PELAKSANAAN KONTRAK DISERTAI BERITA ACARA
                    </td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pemeriksaan_bersama_2" id="pemeriksaan_bersama_2" value="1" {{
                            $pemeriksaan_bersama_2 ? 'checked' :'' }}>

                    </td>
                    <td style="width: 40%; text-align:left">TERDAPAT PERUBAHAN ISI KONTRAK SETELAH PEMERIKSAAN
                        BERSAMA</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->pemeriksaan_bersama_2 == 0)
                        @if ($pemeriksaan_bersama_2)
                        <input type="checkbox" name="pemeriksaan_bersama_2" id="pemeriksaan_bersama_2" value="1">
                        @else
                        <input type="checkbox" name="pemeriksaan_bersama_2" id="pemeriksaan_bersama_2" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="pemeriksaan_bersama_2" id="pemeriksaan_bersama_2" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">ADENDUM KONTRAK TERKAIT PERUBAHAN</td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td colspan="2" style="text-align:left">4. PEMBAYARAN UANG MUKA</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">UANG MUKA (Rp)</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="uang_muka" name="uang_muka"
                            value="{{ $kerja_desk->uang_muka }}" required>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">JAMINAN UANG MUKA (Rp)</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="jaminan_uang_muka" name="jaminan_uang_muka"
                            value="{{ $kerja_desk->jaminan_uang_muka }}">
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">PENERBIT JAMINAN UANG MUKA</td>
                    <td class="align-bottom">
                        <select style="-webkit-appearance: none;width:80%" name="penerbit_jaminan_uang_muka"
                            id="penerbit_jaminan_uang_muka" value="{{ $kerja_desk->penerbit_jaminan_uang_muka }}">
                            <option class="text-center" value="Bank Umum">Bank Umum</option>
                            <option class="text-center" value="Perusahaan Penjaminan">Perusahaan Penjaminan</option>
                            <option class="text-center" value="Perusahaan Asuransi">Perusahaan Asuransi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">KRITERIA</td>
                    <td class="align-bottom">
                        <select style="-webkit-appearance: none;width:80%" name="kriteria" id="kriteria"
                            value="{{ $kerja_desk->kriteria }}">
                            <option class="text-center" value="Usaha Kecil">Usaha Kecil</option>
                            <option class="text-center" value="Usaha Non Kecil">Usaha Non Kecil</option>
                            <option class="text-center" value="Kontrak Tahun Jamak">Kontrak Tahun Jamak</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">KETERANGAN JAMINAN UANG MUKA</td>
                    <td class="align-bottom">
                        <select style="-webkit-appearance: none;width:80%" name="keterangan_jaminan_uang_muka"
                            id="keterangan_jaminan_uang_muka" value="{{ $kerja_desk->keterangan_jaminan_uang_muka }}">
                            <option class="text-center" value="Sesuai">Sesuai</option>
                            <option class="text-center" value="Tidak Sesuai">Tidak Sesuai</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NAMA BANK PENERBIT</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="nama_bank_penerbit" name="nama_bank_penerbit"
                            value="{{ $kerja_desk->nama_bank_penerbit }}">
                    </td>
                </tr>
                {{-- <tr>
                    <td style="width: 40%;text-align:left">KETERANGAN (Rp)</td>
                    <td class="align-bottom">Rp. Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">UANG MUKA</td>
                    <td class="align-bottom">Dropdown Option</td>
                </tr> --}}
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pembayaran_uang_muka_1" id="pembayaran_uang_muka_1" value="1" {{
                            $kerja_desk->pembayaran_uang_muka_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">
                        PENYEDIA MENYERTAKAN RENCANA PENGGUNAAN UANG MUKA DALAM PERMOHONAN PENGAMBILAN MUKA
                        SECARATERTULIS KEPADA PPK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pembayaran_uang_muka_2" id="pembayaran_uang_muka_2" value="1" {{
                            $kerja_desk->pembayaran_uang_muka_2 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">
                        SURAT PERMINTAAN PEMBAYARAN DARI PPK UNTUK PERMOHONAN SETELAH JAMINAN UANG MUKA DITERIMA
                        DARI PENYEDIA
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left">5. PERUBAHAN KEGIATAN PEKERJAAN</td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="perubahan_kegiatan_1" id="perubahan_kegiatan_1" value="1" {{
                            $perubahan_kegiatan_1 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">ADA PERUBAHAN PEKERJAAN</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->perubahan_kegiatan_1_1 == 0)
                        @if ($perubahan_kegiatan_1)
                        <input type="checkbox" name="perubahan_kegiatan_1_1" id="perubahan_kegiatan_1_1" value="1">
                        @else
                        <input type="checkbox" name="perubahan_kegiatan_1_1" id="perubahan_kegiatan_1_1" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="perubahan_kegiatan_1_1" id="perubahan_kegiatan_1_1" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">
                        ADA PERINTAH YANG DIBUAT PPK SECARA TERTULIS KEPADA PENYEDIA
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>
                        @if ($kerja_desk->perubahan_kegiatan_1_2 == 0)
                        @if ($perubahan_kegiatan_1)
                        <input type="checkbox" name="perubahan_kegiatan_1_2" id="perubahan_kegiatan_1_2" value="1">
                        @else
                        <input type="checkbox" name="perubahan_kegiatan_1_2" id="perubahan_kegiatan_1_2" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="perubahan_kegiatan_1_2" id="perubahan_kegiatan_1_2" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="text-align: left">NEGOSIASI TEKNIS</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>
                        @if ($kerja_desk->perubahan_kegiatan_1_3 == 0)
                        @if ($perubahan_kegiatan_1)
                        <input type="checkbox" name="perubahan_kegiatan_1_3" id="perubahan_kegiatan_1_3" value="1">
                        @else
                        <input type="checkbox" name="perubahan_kegiatan_1_3" id="perubahan_kegiatan_1_3" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="perubahan_kegiatan_1_3" id="perubahan_kegiatan_1_3" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="text-align: left">HARGA MENGACU PADA KETENTUAN YANG TERCANTUM DALAM KONTRAK AWAL</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>
                        @if ($kerja_desk->perubahan_kegiatan_1_4 == 0)
                        @if ($perubahan_kegiatan_1)
                        <input type="checkbox" name="perubahan_kegiatan_1_4" id="perubahan_kegiatan_1_4" value="1">
                        @else
                        <input type="checkbox" name="perubahan_kegiatan_1_4" id="perubahan_kegiatan_1_4" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="perubahan_kegiatan_1_4" id="perubahan_kegiatan_1_4" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="text-align: left">HASIL NEGOSIASI DITUANGKAN DALAM BERITA ACARA SEBAGAI DASAR
                        PENYUSUNAN ADENDUM KONTRAK</td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td colspan="2" style="text-align:left">6. ASURANSI</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="asuransi_1" id="asuransi_1" value="1" {{ $kerja_desk->asuransi_1 !=
                        0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">
                        PENYEDIA TELAH MENGASURANSIKAN BARANG-BARANG YANG AKAN DIKIRIM SESUAI DENGAN PERATURAN
                        PERUNDANG-UNDANGAN YANG BERLAKU DAN KETENTUAN YANG TERCANTUM DALAM KONTRAK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="asuransi_2" id="asuransi_2" value="1" {{ $kerja_desk->asuransi_2 !=
                        0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">
                        PENERIMA MANFAAT SUDAH DIJELASKAN DALAM DOKUMEN ASURANSI YANG DISESUAIKAN DENGAN KETENTUAN
                        KONTRAK
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left">7. PENGIRIMAN</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pengiriman_1" id="pengiriman_1" value="1" {{
                            $kerja_desk->pengiriman_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">
                        PENYEDIA MEMBERI INFORMASI KEPADA PPK TENTANG JADWAL PENGIRIMAN BARANG
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pengiriman_2" id="pengiriman_2" value="1" {{
                            $kerja_desk->pengiriman_2 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">
                        PENYEDIA MEMBERIKAN DOKUMEN PENGIRIMAN BARANG KEPADA PPK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pengiriman_3" id="pengiriman_3" value="1" {{
                            $kerja_desk->pengiriman_3 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">
                        SARANA TRANSPORTASI YANG DIGUNAKAN SESUAI DENGAN DOKUMEN KONTRAK
                    </td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pengiriman_4" id="pengiriman_4" value="1" {{ $pengiriman_4
                            ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">BARANG MUDAH RUSAK ATAU BERISIKO TINGGI</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->pengiriman_4_1 == 0)
                        @if ($pengiriman_4)
                        <input type="checkbox" name="pengiriman_4_1" id="pengiriman_4_1" value="1">
                        @else
                        <input type="checkbox" name="pengiriman_4_1" id="pengiriman_4_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="pengiriman_4_1" id="pengiriman_4_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">
                        PENYEDIA BARANG MEMBERIKAN INFORMASI SECARA RINCI TENTANG CARA PENANGANANNYA
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        8. UJI COBA BARANG
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="uji_coba_barang_1" id="uji_coba_barang_1" value="1" {{
                            $uji_coba_barang_1 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">UJI COBA DILAKUKAN OLEH PENYEDIA</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->uji_coba_barang_1_1 == 0)
                        @if ($uji_coba_barang_1)
                        <input type="checkbox" name="uji_coba_barang_1_1" id="uji_coba_barang_1_1" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_barang_1_1" id="uji_coba_barang_1_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_barang_1_1" id="uji_coba_barang_1_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">DISAKSIKAN PPK/PPHP</td>
                </tr>
                <tr>
                    <td style="width: 10%" colspan="2"></td>
                    <td style="width: 10%">
                        @if ($kerja_desk->uji_coba_barang_1_2 == 0)
                        @if ($uji_coba_barang_1)
                        <input type="checkbox" name="uji_coba_barang_1_2" id="uji_coba_barang_1_2" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_barang_1_2" id="uji_coba_barang_1_2" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_barang_1_2" id="uji_coba_barang_1_2" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">DITUANGKAN DALAM BERITA ACARA</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="uji_coba_barang_2" id="uji_coba_barang_2" value="1" {{
                            $uji_coba_barang_2 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">MEMERLUKAN KEAHLIAN KHUSUS</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->uji_coba_barang_2_1 == 0)
                        @if ($uji_coba_barang_2)
                        <input type="checkbox" name="uji_coba_barang_2_1" id="uji_coba_barang_2_1" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_barang_2_1" id="uji_coba_barang_2_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_barang_2_1" id="uji_coba_barang_2_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">PELATIHAN KEPADA PPK/PPHP OLEH PENYEDIA BARANG</td>
                </tr>
                <tr>
                    <td style="width: 10%" colspan="2"></td>
                    <td style="width: 10%">
                        @if ($kerja_desk->uji_coba_barang_2_2 == 0)
                        @if ($uji_coba_barang_2)
                        <input type="checkbox" name="uji_coba_barang_2_2" id="uji_coba_barang_2_2" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_barang_2_2" id="uji_coba_barang_2_2" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_barang_2_2" id="uji_coba_barang_2_2" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">BIAYA PELATIHAN TERMASUK HARGA BARANG</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="uji_coba_barang_3" id="uji_coba_barang_3" value="1" {{
                            $uji_coba_barang_3 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">SESUAI SPESIFIKASI DALAM KONTRAK</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->uji_coba_barang_3_1 == 0)
                        @if ($uji_coba_barang_3)
                        <input type="checkbox" name="uji_coba_barang_3_1" id="uji_coba_barang_3_1" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_barang_3_1" id="uji_coba_barang_3_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_barang_3_1" id="uji_coba_barang_3_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">
                        PENYEDIA BARANG MENGGANTI/MEMPERBAIKI BARANG TERSEBUT
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" colspan="2"></td>
                    <td style="width: 10%">
                        @if ($kerja_desk->uji_coba_barang_3_2 == 0)
                        @if ($uji_coba_barang_3)
                        <input type="checkbox" name="uji_coba_barang_3_2" id="uji_coba_barang_3_2" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_barang_3_2" id="uji_coba_barang_3_2" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_barang_3_2" id="uji_coba_barang_3_2" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">
                        BIAYA SEPENUHNYA DITANGGUNG PENYEDIA BARANG
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        9. SERAH TERIMA BARANG
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="serah_terima_barang_1" id="serah_terima_barang_1" value="1" {{
                            $serah_terima_barang_1 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">SETELAH PEKERJAAN 100%, ADA PERMINTAAN TERTULIS DARI
                        PENYEDIA BARANG KEPADA PPK UNTUK PENYERAHAN PEKERJAAN</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->serah_terima_barang_1_1 == 0)
                        @if ($serah_terima_barang_1)
                        <input type="checkbox" name="serah_terima_barang_1_1" id="serah_terima_barang_1_1" value="1">
                        @else
                        <input type="checkbox" name="serah_terima_barang_1_1" id="serah_terima_barang_1_1" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="serah_terima_barang_1_1" id="serah_terima_barang_1_1" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">BERITA ACARA SERAH TERIMA (BAST) TERHADAP HASIL
                        PEKERJAAN YANG TELAH DISELESAIKAN OLEH PENYEDIA
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="serah_terima_barang_2" id="serah_terima_barang_2" value="1" {{
                            $serah_terima_barang_2 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">ADA KEKURANGAN-KEKURANGAN DAN / ATAU CACAT HASIL
                        PEKERJAAN</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->serah_terima_barang_2_1 == 0)
                        @if ($serah_terima_barang_2)
                        <input type="checkbox" name="serah_terima_barang_2_1" id="serah_terima_barang_2_1" value="1">
                        @else
                        <input type="checkbox" name="serah_terima_barang_2_1" id="serah_terima_barang_2_1" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="serah_terima_barang_2_1" id="serah_terima_barang_2_1" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">
                        PENYEDIA WAJIB MEMPERBAIKI/MENYELESAIKAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="serah_terima_barang_3" id="serah_terima_barang_3" value="1" {{
                            $kerja_desk->serah_terima_barang_3 != 0 ? 'checked':'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">WAKTU PENERIMAAN BARANG SESUAI DENGAN YANG
                        TERTERA DI KONTRAK TERHITUNG SEJAK PENANDATANGANAN SURAT PESANAN</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        10. PEMBAYARAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pembayaran_1" id="pembayaran_1" value="1" {{
                            $kerja_desk->pembayaran_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">PEMBAYARAN DILAKSANAKAN SETELAH BARANG
                        DITERIMA SESUAI BAST BARANG</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pembayaran_2" id="pembayaran_2" value="1" {{
                            $kerja_desk->pembayaran_2 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">DILENGKAPI BERITA ACARA HASIL UJI COBA</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pembayaran_3" id="pembayaran_3" value="1" {{ $pembayaran_3
                            ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">PEMBAYARAN MENGGUNAKAN L/C</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->pembayaran_3_1 == 0)
                        @if ($pembayaran_3)
                        <input type="checkbox" name="pembayaran_3_1" id="pembayaran_3_1" value="1">
                        @else
                        <input type="checkbox" name="pembayaran_3_1" id="pembayaran_3_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="pembayaran_3_1" id="pembayaran_3_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">MENGIKUTI KETENTUAN UMUM YANG BERLAKU DI BIDANG
                        PERDAGANGAN</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        11. DENDA DAN GANTI RUGI
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="denda_1" id="denda_1" value="1" {{ $denda_1 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">ADA KETERLAMBATAN</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->denda_1_1 == 0)
                        @if ($denda_1)
                        <input type="checkbox" name="denda_1_1" id="denda_1_1" value="1">
                        @else
                        <input type="checkbox" name="denda_1_1" id="denda_1_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="denda_1_1" id="denda_1_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">PENYEDIA TELAH DIKENAKAN DENDA SESUAI KETENTUAN YANG
                        BERLAKU
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        12. PENYESUAIAN HARGA
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyesuaian_harga_1" id="penyesuaian_harga_1" value="1" {{
                            $penyesuaian_harga_1 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">ADA PENYESUAIAN HARGA</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->penyesuaian_harga_1_1 == 0)
                        @if ($penyesuaian_harga_1)
                        <input type="checkbox" name="penyesuaian_harga_1_1" id="penyesuaian_harga_1_1" value="1">
                        @else
                        <input type="checkbox" name="penyesuaian_harga_1_1" id="penyesuaian_harga_1_1" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="penyesuaian_harga_1_1" id="penyesuaian_harga_1_1" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">SESUAI DENGAN KETENTUAN YANG TERCANTUM DALAM DOKUMEN
                        KONTRAK
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        13. PERPANJANGAN WAKTU PELAKSANAAN KONTRAK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="perpanjangan_waktu_1" id="perpanjangan_waktu_1" value="1" {{
                            $perpanjangan_waktu_1 ? 'checked' :'' }}>
                    </td>
                    </td>
                    <td style="width: 40%; text-align:left">ADA PERSETUJUAN PERPANJANGAN WAKTU PELAKSANAAN</td>
                    <td style="width: 10%">
                        @if ($kerja_desk->perpanjangan_waktu_1_1 == 0)
                        @if ($perpanjangan_waktu_1)
                        <input type="checkbox" name="perpanjangan_waktu_1_1" id="perpanjangan_waktu_1_1" value="1">
                        @else
                        <input type="checkbox" name="perpanjangan_waktu_1_1" id="perpanjangan_waktu_1_1" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="perpanjangan_waktu_1_1" id="perpanjangan_waktu_1_1" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">DITUANGKAN DALAM ADENDUM KONTRAK
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        14. LAPORAN HASIL PEKERJAAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="laporan_hasil_1" id="laporan_hasil_1" value="1" {{
                            $kerja_desk->laporan_hasil_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">HASIL PEMERIKSAAN DITUANGKAN DALAM LAPORAN
                        KEMAJUAN
                        HASIL PEKERJAAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="laporan_hasil_2" id="laporan_hasil_2" value="1" {{
                            $kerja_desk->laporan_hasil_2 != 0 ? 'checked':'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">DIBUAT LAPORAN REALISASI MENGENAI SELURUH
                        AKTIVITAS
                        PEKERJAAN UNTUK PENGENDALIAN DAN PENGAWASAN
                    </td>
                </tr>
            </table>
            {{-- <div class="row justify-content-center mt-3 rounded-sm mx-1" style="background-color: #ADD8E6;">
                <div class="col-md-8 text-center d-grid gap-2 my-2">
                    <a href="/rencana/timeline/{{ $rencana->id }}" class="btn btn-primary btn-lg mx-2">Kembali</a>
                    <input type="submit" class="btn btn-success btn-lg mx-2" value="Submit">
                </div>
            </div> --}}
            {{--
        </form> --}}
        {{--
    </div>
    <!-- /.card-body -->
</div> --}}

<script>
    window.print();
</script>

@endsection
