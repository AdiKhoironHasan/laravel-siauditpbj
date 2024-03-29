@extends('layouts.main')

@section('content')
<div class="card card-orange">
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
    <div class="card-body">
        <form action="/rencana/timeline/visit/" method="POST">
            {{-- @method('PUT') --}}
            @csrf

            <input type="hidden" name="rencana_id" id="rencana_id" value="{{ $rencana->id }}">
            <input type="hidden" name="kerja_visit_id" id="kerja_visit_id"
                value="{{ $rencana->kerja_desk->kerja_visit->id }}">
            <input type="hidden" name="generate" value="1">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 20%" rowspan="3" class="bdr bdr-none-bot" style="padding-top: 30px"><img
                            src="/dist/img/logo_pnc.png" style="width: 100px; height: 100px"></td>
                    <td style="width: 40%;" rowspan="2" class="bdr" colspan="3"><b>FORM</b></td>
                    {{-- <td style="width: 15%;" class="txt-lft-20 bdr-none">Kode Dokumen</td>
                    <td style="width: 25%;" class="txt-lft bdr-none">:</td> --}}
                </tr>
                <tr>
                    {{-- <td class="txt-lft-20 bdr-none">Revisi</td>
                    <td class="txt-lft bdr-none">:</td> --}}
                </tr>
                <tr>
                    <td rowspan="2" class="bdr" colspan="3"><b>KERTAS KERJA AUDIT</b></td>
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
                    <td style="background-color: #D3E0EA">
                        <input type=" text" name="tipe_monitoring"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik disini" required>
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
                            value="{{ date('d F Y', strtotime($rencana->monitoring_awal)) }}" readonly>
                    </td>
                    <td rowspan="3">
                        <input type="text" name="tanggal_monitoring"
                            class="forn-control form-control-lg border-0 text-center bg-transparent"
                            value="{{ date('d F Y', strtotime($rencana->tanggal_visit)) }}" readonly>
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
                            value="{{ date('d F Y', strtotime($rencana->monitoring_akhir))}}" readonly>
                    </td>
                    <td class="bdr txt-lft-50">3. {{ $rencana->auditor3->name }}</td>
                </tr>
            </table>
            <br>
            <table style="width: 100%;">
                <tr>
                    <td colspan="4"><b>PENYUSUNAN PROGRAM MUTU</b></td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                    <td colspan="3" class="txt-lft-20">KETERLIBATAN UNIT KERJA DALAM PENYUSUNAN MUTU</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA ">
                        <input type="text" name="penyusunan_mutu_1"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['penyusunan_mutu_1'] }}">
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
                    <td colspan="3" class="txt-lft-20">REVISI PROGRAM MUTU</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="penyusunan_mutu_2"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['penyusunan_mutu_2'] }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>PEMERIKSAAN BERSAMA</b></td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                    <td colspan="3" class="txt-lft-20">PEMERIKSAAN KONDISI LAPANGAN PADA TAHAP AWAL PERUBAHAN
                        KONTRAK
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="pemeriksaan_1"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['pemeriksaan_1'] }}">
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
                    <td colspan="3" class="txt-lft-20">PEMERIKSAAN BERSAMA MENGAKIBATKAN PERUBAHAN KONTRAK</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="pemeriksaan_2"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['pemeriksaan_2'] }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>PERUBAHAN KEGIATAN PERUBAHAN</b></td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                    <td colspan="3" class="txt-lft-20">PERUBAHAN KEGIATAN</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="perubahan_kegiatan"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['perubahan_kegiatan'] }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>ASURANSI</b></td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                    <td colspan="3" class="txt-lft-20">UNIT KERJA MEMERIKSA BARANG YANG DIKIRIM OLEH PENYEDIA</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="asuransi_1"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['asuransi_1'] }}">
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
                    <td colspan="3" class="txt-lft-20">PENJELASAN MANFAAT SUDAH DI JELASKAN DI DALAM KONTRAK</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="asuransi_2"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['asuransi_2'] }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>PENGIRIMAN BARANG OLEH PENYEDIA</b></td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                    <td colspan="3" class="txt-lft-20">PENGIRIMAN BARANG OLEH PENYEDIA</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="pengiriman"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['pengiriman'] }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>UJI COBA BARANG</b></td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                    <td colspan="3" class="txt-lft-20">UJI COBA SETELAH DIKIRIM</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="uji_coba"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['uji_coba'] }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>SERAH TERIMA BARANG</b></td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                    <td colspan="3" class="txt-lft-20">SERAH TERIMA BARANG</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="serah_terima"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['serah_terima'] }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>DENDA DAN GANTI RUGI</b></td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                    <td colspan="3" class="txt-lft-20">DENDA DAN GANTI RUGI</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="denda"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['denda'] }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>PERPANJANGAN WAKTU PELAKANAAN PEKERJAAN</b></td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                    <td colspan="3" class="txt-lft-20">PERPANJANGAN WAKTU PELAKANAAN PEKERJAAN</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="perpanjangan"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['perpanjangan'] }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>LAPORAN HASIL KEGIATAN</b></td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                    <td colspan="3" class="txt-lft-20">LAPORAN HASIL KEGIATAN</td>
                </tr>
                <tr>
                    <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: #D3E0EA">
                        <input type="text" name="laporan"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini" value="{{ $visit['laporan'] }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>CATATAN</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: #D3E0EA">
                        <textarea name="catatan"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>KRITERIA / PERSYARATAN</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: #D3E0EA">
                        <textarea name="kriteria"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>AKAR PENYEAB</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: #D3E0EA">
                        <textarea name="akar_penyebab"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>AKIBAT</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: #D3E0EA">
                        <textarea name="akibat" class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>REKOMENDASI</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: #D3E0EA">
                        <textarea name="rekomendasi"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>TANGGAPAN AUDITEE</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: #D3E0EA">
                        <textarea name="tanggapan_auditee"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>RENCANA PERBAIKAN</b></td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 100px; background-color: #D3E0EA">
                        <textarea name="rencana_perbaikan"
                            class="form-control form-control-lg border-0 text-center bg-transparent"
                            placeholder="ketik di sini"></textarea>
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
    @endsection
