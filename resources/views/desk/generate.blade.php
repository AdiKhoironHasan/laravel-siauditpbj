@extends('layouts.main')

@section('content')
<style>
    /* input[type=text] {
        word-wrap: break-word;
        word-break: break-all;
        height: 80px;
    } */
</style>
<div class="card card-orange">
    <div class="card-header" style="color: white; border-color:transparent">
        <h3 class="card-title">Tambah {{ $title }}</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">

        <form action="/rencana/timeline/desk/{{ $desk->id }}" method="POST">
            @method('PUT')
            @csrf
            {{-- @dd($rencana) --}}
            <input type="hidden" name="rencana_id" id="rencana_id" value="{{ $rencana->id }}">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 20%" rowspan="3" class="bdr bdr-none-bot" style="padding-top: 30px"><img
                            src="/uploads/default/logo_pnc.png" style="width: 100px; height: 100px"></td>
                    <td style="width: 40%;" rowspan="2" class="bdr" colspan="3"><b>FORM</b></td>
                    {{-- <td style="width: 15%;" class="txt-lft-20 bdr-none">Kode Dokumen</td>
                    <td style="width: 25%;" class="txt-lft bdr-none">:</td> --}}
                </tr>
                <tr>
                    {{-- <td class="txt-lft-20 bdr-none">Revisi</td>
                    <td class="txt-lft bdr-none">:</td> --}}
                </tr>
                <tr>
                    <td rowspan="2" class="bdr" colspan="3"><b>KERTAS DATA AUDIT</b></td>
                    {{-- <td class="txt-lft-20 bdr-none">Tanggal Terbit</td>
                    <td class="txt-lft bdr-none">:</td> --}}
                </tr>
                <tr>
                    <td class="bdr bdr-none-top">
                        <h3><b>SPI</b></h3>
                    </td>
                    {{-- <td class="txt-lft-20 bdr-none">Halaman</td>
                    <td class="txt-lft bdr-none">:</td> --}}
                </tr>
            </table>
            <br>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 20%;">UNIT KERJA</th>
                    <th style="width: 40%;">TIPE MONITORING</th>
                    <th style="width: 40%;">PAKET PEKERJAAN</th>
                </tr>
                <tr>
                    <td class="text-uppercase">{{ $rencana->kerja_desk->unit_kerja }}</td>
                    <td style="background-color: lightblue;">
                        <input type="text" name="tipe_monitoring"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->tipe_monitoring }}" required>
                    </td>
                    <td class="text-uppercase">{{ $rencana->kerja_desk->nama_paket }}</td>
                </tr>
                <tr>
                    <th>MASA MONITORING</th>
                    <th>TANGGAL MONITORING</th>
                    <th>AUDITOR</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="masa_monitoring_awal"
                            class="forn-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->masa_monitoring_awal }}" readonly>
                    </td>
                    <td rowspan="3">
                        <input type="text" name="tanggal_monitoring"
                            class="forn-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->tanggal_monitoring }}" readonly>
                    </td>
                    <td class="bdr txt-lft-50">1. {{ $rencana->auditor1->name }}</td>
                </tr>
                <tr>
                    <td>s/d.</td>
                    <td class="bdr txt-lft-50">2. {{ $rencana->auditor2->name }}</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="masa_monitoring_akhir"
                            class="forn-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->masa_monitoring_akhir }}" readonly>
                    </td>
                    <td class="bdr txt-lft-50">3. {{ $rencana->auditor3->name }}</td>
                </tr>
            </table>
            <br>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 5%;">NO</th>
                    <th style="width: 35%;">ITEM</th>
                    <th style="width: 45%;">URAIAN</th>
                    <th style="width: 15%;">KODE TEMUAN</th>
                </tr>
                <tr>
                    <td colspan="4"><b>PENDANDATANGANAN KONTRAK</b></td>
                </tr>
                <tr>
                    <td><b>1</b></td>
                    <td colspan="3" class="txt-lft-20"><b>KONTRAK</b></td>
                </tr>
                <tr>
                    <td>a</td>
                    <td class="txt-lft-20">TGL SPPBJ</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="kontrak_1"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->kontrak_1 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>b</td>
                    <td class="txt-lft-20">SUBSTANSI KONTRAK</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="kontrak_2"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->kontrak_2 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>c</td>
                    <td class="txt-lft-20">TTD KONTRAK OLEH PENYEDIA</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="kontrak_3"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->kontrak_3 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>d</td>
                    <td class="txt-lft-20">PERTENTANGAN</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="kontrak_4"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->kontrak_4 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 50px;"></td>
                </tr>
                <tr>
                    <td colspan="4"><b>PELAKSANAAN KONTRAK PENGADAAN BARANG</b></td>
                </tr>
                <tr>
                    <td><b>1</b></td>
                    <td colspan="3" class="txt-lft-20"><b>SURAT PESANAN</b></td>
                </tr>
                <tr>
                    <td>a</td>
                    <td class="txt-lft-20">TGL SURAT PESANAN</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="surat_pesanan_1"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->surat_pesanan_1 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>b</td>
                    <td class="txt-lft-20">TTD PENYEDIA</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="surat_pesanan_2"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->surat_pesanan_2 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>c</td>
                    <td class="txt-lft-20">MATERAI 6000</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="surat_pesanan_3"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->surat_pesanan_3 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>d</td>
                    <td class="txt-lft-20">TANGGAL DISETUJUI</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="surat_pesanan_4"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->surat_pesanan_4 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 30px;"></td>
                </tr>
                <tr>
                    <td><b>2</b></td>
                    <td colspan="3" class="txt-lft-20"><b>PENYUSUNAN PROGRAM MUTU</b></td>
                </tr>
                <tr>
                    <td>a</td>
                    <td class="txt-lft-20">INFORMASI PENGADAAN BARANG</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="penyusunan_program_mutu"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->penyusunan_program_mutu }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 30px;"></td>
                </tr>
                <tr>
                    <td><b>3</b></td>
                    <td colspan="3" class="txt-lft-20"><b>PEMERIKSAAN BERSAMA</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="txt-lft-20">PEMERIKSAAN KONDISI LAPANGAN PADA TAHAP AWAL PELAKSANAAN KONTRAK</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="pemeriksaan_bersama"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->pemeriksaan_bersama }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 30px;"></td>
                </tr>

                <tr>
                    <td><b>4</b></td>
                    <td colspan="3" class="txt-lft-20"><b>PEMBAYARAN UANG MUKA</b></td>
                </tr>
                <tr>
                    <td>a</td>
                    <td class="txt-lft-20">BESARAN UANG MUKA</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="pembayaran_uang_muka_1"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->pembayaran_uang_muka_1 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>b</td>
                    <td class="txt-lft-20">JAMINAN UANG MUKA</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="pembayaran_uang_muka_2"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->pembayaran_uang_muka_2 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 30px;"></td>
                </tr>

                <tr>
                    <td><b>5</b></td>
                    <td colspan="3" class="txt-lft-20"><b>UJI COBA BARANG</b></td>
                </tr>
                <tr>
                    <td>a</td>
                    <td class="txt-lft-20">UJI COBA YANG DILAKUKAN OLEH PENYEDIA</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="uji_coba_barang"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->uji_coba_barang }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 30px;"></td>
                </tr>

                <tr>
                    <td><b>6</b></td>
                    <td colspan="3" class="txt-lft-20"><b>SERAH TERIMA BARANG</b></td>
                </tr>
                <tr>
                    <td>a</td>
                    <td class="txt-lft-20">BERITA ACARA SERAH</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="serah_terima_barang_1"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->serah_terima_barang_1 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>b</td>
                    <td class="txt-lft-20">WAKTU PENERIMAAN</td>
                    <td class="txt-up" style="background-color: lightblue;">
                        <input type="text" name="serah_terima_barang_2"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $desk->serah_terima_barang_2 }}">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 30px;"></td>
                </tr>
                <tr>
                    <td colspan="4"><b>CATATAN</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: lightblue;">
                        <textarea name="catatan"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini">{{ $desk->catatan }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>KRITERIA / PERSYARATAN</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: lightblue;">
                        <textarea name="kriteria"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini">{{ $desk->kriteria }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>AKAR PENYEAB</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: lightblue;">
                        <textarea name="akar_penyebab"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini">{{ $desk->akar_penyebab }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>AKIBAT</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: lightblue;">
                        <textarea name="akibat" class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini">{{ $desk->akibat }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>REKOMENDASI</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: lightblue;">
                        <textarea name="rekomendasi"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini">{{ $desk->rekomendasi }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>TANGGAPAN AUDITEE</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: lightblue;">
                        <textarea name="tanggapan_auditee"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini">{{ $desk->tanggapan_auditee }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>RENCANA PERBAIKAN</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: lightblue;">
                        <textarea name="rencana_perbaikan"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini">{{ $desk->rencana_perbaikan }}</textarea>
                    </td>
                </tr>
            </table>
            <table style="width: 100%;" class="bdr-none-top">
                <tr>
                    <td colspan="2" style="width: 50%;" class="bdr-none-top bdr-none-rght"><b>Pimpinan Auditi</b></td>
                    <td colspan="2" style="width: 50%;" class="bdr-none-top bdr-none-lft"><b>Ketua Auditor</b></td>
                </tr>
                <tr>
                    <div style="width: 100%;">
                        <td colspan="2" style="height: 100px;" class="bdr-none-rght">
                            <img src="/uploads/{{ $rencana->auditee->ttd }}" height="100" width="100">
                        </td>
                        <td colspan="2" style="height: 100px;" class="bdr-none-lft">
                            <img src="/uploads/{{ $rencana->auditor1->ttd }}" height="100" width="100">
                        </td>
                    </div>
                </tr>
                <tr>
                    <td colspan="2" class="bdr-none-rght text-capitalize">
                        <b>{{ $rencana->auditee->name }}</b>
                    </td>
                    <td colspan="2" class="bdr-none-lft text-capitalize"><b>{{ $rencana->auditor1->name }}</b></td>
                </tr>
                <tr>
                    <td colspan="4"><b>Direview Oleh</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px;">
                        <img src="/uploads/{{ $ketua->ttd }}" height="100" width="100">
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="text-capitalize"><b>{{ $ketua->name }}</b></td>
                </tr>
            </table>
            <div class="row justify-content-center mt-3 rounded-sm mx-1" style="background-color: #ADD8E6;">
                <div class="col-md-8 text-center d-grid gap-2 my-2">
                    <a href="/rencana/timeline/{{ $rencana->id }}" class="btn btn-primary btn-lg mx-2">Kembali</a>
                    <input type="submit" class="btn btn-success btn-lg mx-2" value="Submit">
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
@endsection
