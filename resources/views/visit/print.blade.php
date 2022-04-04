@extends('layouts.print.main')

@section('content')
    <table style="width: 100%;">
        <tr>
            <td style="width: 20%" rowspan="3" class="bdr bdr-none-bot" style="padding-top: 30px"><img
                    src="/dist/img/logo_pnc.png" style="width: 100px; height: 100px"></td>
            <td style="width: 40%;" rowspan="2" class="bdr"><b>FORM</b></td>
            <td style="width: 15%;" class="txt-lft-20 bdr-none">Kode Dokumen</td>
            <td style="width: 25%;" class="txt-lft bdr-none">:</td>
        </tr>
        <tr>
            <td class="txt-lft-20 bdr-none">Revisi</td>
            <td class="txt-lft bdr-none">:</td>
        </tr>
        <tr>
            <td rowspan="2" class="bdr"><b>KERTAS KERJA AUDIT</b></td>
            <td class="txt-lft-20 bdr-none">Tanggal Terbit</td>
            <td class="txt-lft bdr-none">:</td>
        </tr>
        <tr>
            <td class="bdr bdr-none-top">
                <h3><b>SPI</b></h3>
            </td>
            <td class="txt-lft-20 bdr-none">Halaman</td>
            <td class="txt-lft bdr-none">:</td>
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
            <td class="text-uppercase">{{ $rencana->barang->unit->nama }}</td>
            <td>
                <input readonly type=" text" name="tipe_monitoring"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik disini"
                    value="{{ $visit->tipe_monitoring }}">
            </td>
            <td class="text-uppercase">{{ $rencana->barang->nama }}</td>
        </tr>
        <tr>
            <th>MASA MONITORING</th>
            <th>TANGGAL MONITORING</th>
            <th>AUDITOR</th>
        </tr>
        <tr>
            <td>
                {{ date('d F Y', strtotime($visit->masa_monitoring_awal)) }}
            </td>
            <td rowspan="3">
                {{ date('d F Y', strtotime($visit->tanggal_monitoring)) }}
            </td>
            <td class="bdr txt-lft-50">1. {{ $rencana->auditor1->nama }}</td>
        </tr>
        <tr>
            <td>s/d.</td>
            <td class="bdr txt-lft-50">2. {{ $rencana->auditor2->nama }}</td>
        </tr>
        <tr>
            <td>
                {{ date('d F Y', strtotime($visit->masa_monitoring_akhir)) }}
            </td>
            <td class="bdr txt-lft-50">3. {{ $rencana->auditor3->nama }}</td>
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
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="penyusunan_mutu_1"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->penyusunan_mutu_1 }}">
            </td>
        </tr>
        <tr>
            <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
            <td colspan="3" class="txt-lft-20">REVISI PROGRAM MUTU</td>
        </tr>
        <tr>
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="penyusunan_mutu_2"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->penyusunan_mutu_2 }}">
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
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="pemeriksaan_1"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->pemeriksaan_1 }}">
            </td>
        </tr>
        <tr>
            <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
            <td colspan="3" class="txt-lft-20">PEMERIKSAAN BERSAMA MENGAKIBATKAN PERUBAHAN KONTRAK</td>
        </tr>
        <tr>
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="pemeriksaan_2"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->pemeriksaan_2 }}">
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
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="perubahan_kegiatan"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->perubahan_kegiatan }}">
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
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="asuransi_1"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->asuransi_1 }}">
            </td>
        </tr>
        <tr>
            <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
            <td colspan="3" class="txt-lft-20">PENJELASAN MANFAAT SUDAH DI JELASKAN DI DALAM KONTRAK</td>
        </tr>
        <tr>
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="asuransi_2"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->asuransi_2 }}">
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
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="pengiriman"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->pengiriman }}">
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
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="uji_coba"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->uji_coba }}">
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
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="serah_terima"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->serah_terima }}">
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
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="denda"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->denda }}">
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
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="perpanjangan"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->perpanjangan }}">
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
            <td colspan="3" class="txt-lft-20" style="height: 50px;">
                <input readonly type="text" name="laporan"
                    class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"
                    value="{{ $visit->laporan }}">
            </td>
        </tr>
        <tr>
            <td colspan="4"><b>CATATAN</b></td>
        </tr>
        <tr>
            <td colspan="4" style="height: 100px;">
                <textarea readonly name="catatan" class="form-control form-control-lg border-0 text-center bg-transparent"
                    placeholder="ketik di sini">{{ $visit->catatan }}</textarea>
            </td>
        </tr>
        <tr>
            <td colspan="4"><b>KRITERIA / PERSYARATAN</b></td>
        </tr>
        <tr>
            <td colspan="4" style="height: 100px;">
                <textarea readonly name="kriteria" class="form-control form-control-lg border-0 text-center bg-transparent"
                    placeholder="ketik di sini">{{ $visit->kriteria }}</textarea>
            </td>
        </tr>
        <tr>
            <td colspan="4"><b>AKAR PENYEAB</b></td>
        </tr>
        <tr>
            <td colspan="4" style="height: 100px;">
                <textarea readonly name="akar_penyebab" class="form-control form-control-lg border-0 text-center bg-transparent"
                    placeholder="ketik di sini">{{ $visit->akar_penyebab }}</textarea>
            </td>
        </tr>
        <tr>
            <td colspan="4"><b>AKIBAT</b></td>
        </tr>
        <tr>
            <td colspan="4" style="height: 100px;">
                <textarea readonly name="akibat" class="form-control form-control-lg border-0 text-center bg-transparent"
                    placeholder="ketik di sini">{{ $visit->akibat }}</textarea>
            </td>
        </tr>
        <tr>
            <td colspan="4"><b>REKOMENDASI</b></td>
        </tr>
        <tr>
            <td colspan="4" style="height: 100px;">
                <textarea readonly name="rekomendasi" class="form-control form-control-lg border-0 text-center bg-transparent"
                    placeholder="ketik di sini">{{ $visit->rekomendasi }}</textarea>
            </td>
        </tr>
        <tr>
            <td colspan="4"><b>TANGGAPAN AUDITEE</b></td>
        </tr>
        <tr>
            <td colspan="4" style="height: 100px;">
                <textarea readonly name="tanggapan_auditee" class="form-control form-control-lg border-0 text-center bg-transparent"
                    placeholder="ketik di sini">{{ $visit->tanggapan_auditee }}</textarea>
            </td>
        </tr>
        <tr>
            <td colspan="4"><b>RENCANA PERBAIKAN</b></td>
        </tr>
        <tr>
            <td colspan="4" style="height: 100px;">
                <textarea readonly name="rencana_perbaikan" class="form-control form-control-lg border-0 text-center bg-transparent"
                    placeholder="ketik di sini">{{ $visit->rencana_perbaikan }}</textarea>
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
                    <img src="../AdminLTE/dist/img/ttd/#" height="100" width="100">
                </td>
                <td colspan="2" style="height: 100px;" class="bdr-none-lft">
                    <img src="../AdminLTE/dist/img/ttd/" height="100" width="100">
                </td>
            </div>
        </tr>
        <tr>
            <td colspan="2" class="bdr-none-rght text-capitalize">
                <b>{{ $rencana->barang->unit->user->nama }}</b>
            </td>
            <td colspan="2" class="bdr-none-lft text-capitalize"><b>{{ $rencana->auditor1->nama }}</b></td>
        </tr>
        <tr>
            <td colspan="4"><b>Direview Oleh</b></td>
        </tr>
        <tr>
            <td colspan="4" style="height: 100px;">
                <img src="../AdminLTE/dist/img/ttd/#" height="100" width="100">
            </td>
        </tr>
        <tr>
            <td colspan="4" class="text-capitalize"><b>Ketua SPI</b></td>
        </tr>
    </table>
@endsection
