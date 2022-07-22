@extends('layouts.main')

@push('script')
<script>
    $(document).on("change", "#penyusunan_mutu_4", function () {
        if ($(this).prop("checked")) {
            $("#penyusunan_mutu_4_1").attr("disabled", false);
            $("#penyusunan_mutu_4_2").attr("disabled", false);
        } else {
            $("#penyusunan_mutu_4_1").attr("disabled", true);
            $("#penyusunan_mutu_4_1").prop("checked", false);
            $("#penyusunan_mutu_4_2").attr("disabled", true);
            $("#penyusunan_mutu_4_2").prop("checked", false);
        }
    });

    $(document).on("change", "#penyusunan_mutu_6", function () {
        if ($(this).prop("checked")) {
            $("#penyusunan_mutu_6_1").attr("disabled", false);
        } else {
            $("#penyusunan_mutu_6_1").attr("disabled", true);
            $("#penyusunan_mutu_6_1").prop("checked", false);
        }
    });

    $(document).on("change", "#pemeriksaan_bersama_1", function () {
        if ($(this).prop("checked")) {
            $("#pemeriksaan_bersama_1_1").attr("disabled", false);
        } else {
            $("#pemeriksaan_bersama_1_1").attr("disabled", true);
            $("#pemeriksaan_bersama_1_1").prop("checked", false);
        }
    });

    $(document).on("change", "#pemeriksaan_bersama_3", function () {
        if ($(this).prop("checked")) {
            $("#pemeriksaan_bersama_3_1").attr("disabled", false);
        } else {
            $("#pemeriksaan_bersama_3_1").attr("disabled", true);
            $("#pemeriksaan_bersama_3_1").prop("checked", false);
        }
    });

    $(document).on("change", "#perubahan_kegiatan_1", function () {
        if ($(this).prop("checked")) {
            $("#perubahan_kegiatan_1_1").attr("disabled", false);
            $("#perubahan_kegiatan_1_2").attr("disabled", false);
        } else {
            $("#perubahan_kegiatan_1_1").attr("disabled", true);
            $("#perubahan_kegiatan_1_1").prop("checked", false);
            $("#perubahan_kegiatan_1_2").attr("disabled", true);
            $("#perubahan_kegiatan_1_2").prop("checked", false);
        }
    });

    $(document).on("change", "#uji_coba_1", function () {
        if ($(this).prop("checked")) {
            $("#uji_coba_1_1").attr("disabled", false);
            $("#uji_coba_1_2").attr("disabled", false);
        } else {
            $("#uji_coba_1_1").attr("disabled", true);
            $("#uji_coba_1_1").prop("checked", false);
            $("#uji_coba_1_2").attr("disabled", true);
            $("#uji_coba_1_2").prop("checked", false);
        }
    });

    $(document).on("change", "#uji_coba_2", function () {
        if ($(this).prop("checked")) {
            $("#uji_coba_2_1").attr("disabled", false);
            $("#uji_coba_2_2").attr("disabled", false);
        } else {
            $("#uji_coba_2_1").attr("disabled", true);
            $("#uji_coba_2_1").prop("checked", false);
            $("#uji_coba_2_2").attr("disabled", true);
            $("#uji_coba_2_2").prop("checked", false);
        }
    });

    $(document).on("change", "#uji_coba_3", function () {
        if ($(this).prop("checked")) {
            $("#uji_coba_3_1").attr("disabled", false);
            $("#uji_coba_3_2").attr("disabled", false);
        } else {
            $("#uji_coba_3_1").attr("disabled", true);
            $("#uji_coba_3_1").prop("checked", false);
            $("#uji_coba_3_2").attr("disabled", true);
            $("#uji_coba_3_2").prop("checked", false);
        }
    });

    $(document).on("change", "#denda_1", function () {
        if ($(this).prop("checked")) {
            $("#denda_1_1").attr("disabled", false);
            $("#denda_1_2").attr("disabled", false);
        } else {
            $("#denda_1_1").attr("disabled", true);
            $("#denda_1_1").prop("checked", false);
            $("#denda_1_2").attr("disabled", true);
            $("#denda_1_2").prop("checked", false);
        }
    });

    $(document).on("change", "#asuransi_1", function () {
        if ($(this).prop("checked")) {
            $("#asuransi_1_1").attr("disabled", false);
        } else {
            $("#asuransi_1_1").attr("disabled", true);
            $("#asuransi_1_1").prop("checked", false);
        }
    });

    $(document).on("change", "#pengiriman_3", function () {
        if ($(this).prop("checked")) {
            $("#pengiriman_3_1").attr("disabled", false);
        } else {
            $("#pengiriman_3_1").attr("disabled", true);
            $("#pengiriman_3_1").prop("checked", false);
        }
    });

    $(document).on("change", "#pengiriman_4", function () {
        if ($(this).prop("checked")) {
            $("#pengiriman_4_1").attr("disabled", false);
        } else {
            $("#pengiriman_4_1").attr("disabled", true);
            $("#pengiriman_4_1").prop("checked", false);
        }
    });

    $(document).on("change", "#serah_terima_3", function () {
        if ($(this).prop("checked")) {
            $("#serah_terima_3_1").attr("disabled", false);
        } else {
            $("#serah_terima_3_1").attr("disabled", true);
            $("#serah_terima_3_1").prop("checked", false);
        }
    });

    $(document).on("change", "#perpanjangan_1", function () {
        if ($(this).prop("checked")) {
            $("#perpanjangan_1_1").attr("disabled", false);
        } else {
            $("#perpanjangan_1_1").attr("disabled", true);
            $("#perpanjangan_1_1").prop("checked", false);
        }
    });

</script>
@endpush

@section('content')
<style>
    input {
        padding-left: 20px;
    }

    textarea {
        padding: 10px;
    }
</style>
<div class="card card-orange">
    <div class="card-header" style="color: white; border-color:transparent">
        <h3 class="card-title">Edit {{ $title }}</h3>
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
        <form action="/rencana/timeline/kerjavisit/{{ $kerja_visit->id }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="rencana_id" id="rencana_id" value="{{ $rencana->id }}">
            <input type="hidden" name="kerja_desk_id" id="kerja_desk_id" value="{{ $rencana->kerja_desk->id }}">

            <table class="table border border-primary">
                <tr style="border-top:3px solid #000">
                    <td style="width: 30%;" class="align-middle" rowspan="2">
                        <img src="/uploads/default/logo_pnc.png" style="width: 100px; height: 100px">
                        <br><strong>SPI</strong>
                    </td>
                    <td class="align-bottom"><strong>KERTAS KERJA AUDIT (KKA)</strong></td>
                </tr>
                <tr>
                    <td>VISIT EVALUATION</td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <td style="width: 40%;text-align:left">UNIT KERJA</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="unit_kerja" name="unit_kerja"
                            value="{{ $rencana->kerja_desk->unit_kerja}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TAHNUN ANGGARAN</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="number" id="tahun" name="tahun"
                            value="{{ $rencana->kerja_desk->tahun}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NAMA PAKET</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="nama_paket" name="nama_paket"
                            value="{{ $rencana->kerja_desk->nama_paket}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NOMOR KONTRAK</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="no_kontrak" name="no_kontrak"
                            value="{{ $rencana->kerja_desk->no_kontrak}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NILAI KONTRAK</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="nilai_kontrak" name="nilai_kontrak"
                            value="{{ $rencana->kerja_desk->nilai_kontrak}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TANGGAL KONTRAK</td>
                    <td class="align-bottom">
                        <input style="width: 80%" type="text" id="tanggal_kontrak" name="tanggal_kontrak"
                            onfocus="(this.type='date')" value="{{ $rencana->kerja_desk->tanggal_kontrak}}" readonly>
                    </td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <th colspan="2" style="width: 10%; text-align:left">A. PENYUSUNAN PROGRAM MUTU</th>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_mutu_1" id="penyusunan_mutu_1" value="1" {{
                            $kerja_visit->penyusunan_mutu_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">UNIT KERJA TERLIBAT AKTIF DALAM PENYUSUNAN MUTU YANG DISUSUN OLEH
                        PENYEDIA
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left; padding-left:4%">PROGRAM MUTU PALING SEDIKIT BERISI:
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_mutu_2" id="penyusunan_mutu_2" value="1" {{
                            $kerja_visit->penyusunan_mutu_2 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">JADWAL PELAKSANAAN PEKERJAAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_mutu_3" id="penyusunan_mutu_3" value="1" {{
                            $kerja_visit->penyusunan_mutu_3 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="text-align: left">PELAKSANAAN KERJA
                    </td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_mutu_4" id="penyusunan_mutu_4" value="1" {{
                            $kerja_visit->penyusunan_mutu_4 != 0 ? 'checked':'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">VERIFIKASI TERHADAP ORGANISASI PENYEDIA</td>
                    <td style="width: 10%">
                        @if ($kerja_visit->penyusunan_mutu_4_1 == 0)
                        @if ($penyusunan_mutu_4)
                        <input type="checkbox" name="penyusunan_mutu_4_1" id="penyusunan_mutu_4_1" value="1">
                        @else
                        <input type="checkbox" name="penyusunan_mutu_4_1" id="penyusunan_mutu_4_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="penyusunan_mutu_4_1" id="penyusunan_mutu_4_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">ALAMAT
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td style="width: 10%">
                        @if ($kerja_visit->penyusunan_mutu_4_2 == 0)
                        @if ($penyusunan_mutu_4)
                        <input type="checkbox" name="penyusunan_mutu_4_2" id="penyusunan_mutu_4_2" value="1">
                        @else
                        <input type="checkbox" name="penyusunan_mutu_4_2" id="penyusunan_mutu_4_2" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="penyusunan_mutu_4_2" id="penyusunan_mutu_4_2" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">IDENTITAS PENYEDIA</td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="penyusunan_mutu_5"
                            id="penyusunan_mutu_5">{{ $kerja_visit->penyusunan_mutu_5 }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="penyusunan_mutu_6" id="penyusunan_mutu_6" value="1" {{
                            $penyusunan_mutu_6 !=0 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">ADA REVISI PROGRAM MUTU
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->penyusunan_mutu_6_1 == 0)
                        @if ($penyusunan_mutu_6)
                        <input type="checkbox" name="penyusunan_mutu_6_1" id="penyusunan_mutu_6_1" value="1">
                        @else
                        <input type="checkbox" name="penyusunan_mutu_6_1" id="penyusunan_mutu_6_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="penyusunan_mutu_6_1" id="penyusunan_mutu_6_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">UNIT KERJA MENGETAHUI ADA REVISI PROGRAM MUTU
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="penyusunan_mutu_7"
                            id="penyusunan_mutu_7">{{ $kerja_visit->penyusunan_mutu_7 }}</textarea>
                    </td>
                </tr>

                <tr>
                    <th colspan="4" style="width: 10%; text-align:left">B. PEMERIKSAAN BERSAMA</th>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pemeriksaan_bersama_1" id="pemeriksaan_bersama_1" value="1" {{
                            $pemeriksaan_bersama_1 !=0 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">PPK BERSAMA PENYEDIA MELAKUKAN PEMERIKSAAN KONDISI LAPANGAN
                        PADA TAHAP AWAL PELAKSANAAN KONTRAK
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->pemeriksaan_bersama_1_1 == 0)
                        @if ($pemeriksaan_bersama_1)
                        <input type="checkbox" name="pemeriksaan_bersama_1_1" id="pemeriksaan_bersama_1_1" value="1">
                        @else
                        <input type="checkbox" name="pemeriksaan_bersama_1_1" id="pemeriksaan_bersama_1_1" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="pemeriksaan_bersama_1_1" id="pemeriksaan_bersama_1_1" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">MELIBATKAN UNIT KERJA
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="pemeriksaan_bersama_2"
                            id="pemeriksaan_bersama_2">{{ $kerja_visit->pemeriksaan_bersama_2 }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pemeriksaan_bersama_3" id="pemeriksaan_bersama_3" value="1" {{
                            $pemeriksaan_bersama_3 !=0 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">PEMERIKSAAN BERSAMA MENGAKIBATKAN PERUBAHAN KONTRAK
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->pemeriksaan_bersama_3_1 == 0)
                        @if ($pemeriksaan_bersama_3)
                        <input type="checkbox" name="pemeriksaan_bersama_3_1" id="pemeriksaan_bersama_3_1" value="1">
                        @else
                        <input type="checkbox" name="pemeriksaan_bersama_3_1" id="pemeriksaan_bersama_3_1" value="1"
                            disabled>
                        @endif
                        @else
                        <input type="checkbox" name="pemeriksaan_bersama_3_1" id="pemeriksaan_bersama_3_1" value="1"
                            checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">UNIT KERJA MENGETAHUI ISI ADENDUM KONTRAK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="pemeriksaan_bersama_4"
                            id="pemeriksaan_bersama_4">{{ $kerja_visit->pemeriksaan_bersama_4 }}</textarea>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th colspan="4" style="width: 10%; text-align:left">C. PERUBAHAN KEGIATAN PEKERJAAN</th>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="perubahan_kegiatan_1" id="perubahan_kegiatan_1" value="1" {{
                            $perubahan_kegiatan_1 !=0 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">ADA PERUBAHAN PEKERJAAN
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->perubahan_kegiatan_1_1 == 0)
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
                    <td style="width: 40%; text-align:left">UNIT KERJA MENGETAHUI ADANYA PERUBAHAN
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td style="width: 10%">
                        @if ($kerja_visit->perubahan_kegiatan_1_2 == 0)
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
                    <td style="width: 40%; text-align:left">PERUBAHAN MENGACU PADA KETENTUAN YANG TERCANTUM DALAM
                        KONTRAK AWAL
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="perubahan_kegiatan_3"
                            id="perubahan_kegiatan_3">{{ $kerja_visit->perubahan_kegiatan_3 }}</textarea>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th colspan="4" style="width: 10%; text-align:left">D. ASURANSI</th>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="asuransi_1" id="asuransi_1" value="1" {{ $asuransi_1 !=0
                            ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">UNIT KERJA PERNAH MEMERIKSA BARANG-BARANG YANG DIKIRIMKAN
                        OLEH PENYEDIA TELAH DIASURANSIKAN
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->asuransi_1_1 == 0)
                        @if ($asuransi_1)
                        <input type="checkbox" name="asuransi_1_1" id="asuransi_1_1" value="1">
                        @else
                        <input type="checkbox" name="asuransi_1_1" id="asuransi_1_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="asuransi_1_1" id="asuransi_1_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">ASURANSI SESUAI DENGAN KETENTUAN PERUNDANG-UNDANGAN YANG
                        BERLAKU YANG TERCANTUM DALAM KONTRAK AWAL
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="asuransi_2"
                            id="asuransi_2">{{ $kerja_visit->asuransi_2 }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="asuransi_3" id="asuransi_3" value="1" {{ $kerja_visit->asuransi_3
                        !=0
                        ? 'checked' :'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">UNIT KERJA SEBAGAI PENERIMA MANFAAT TELAH
                        DIJELASKAN DALAM DOKUMEN ASURANSI YANG DISESUAIKAN DENGAN KETENTUAN KONTRAK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="asuransi_4"
                            id="asuransi_4">{{ $kerja_visit->asuransi_4 }}</textarea>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" style="width: 10%; text-align:left">E. PENGIRIMAN</th>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pengiriman_1" id="pengiriman_1" value="1" {{
                            $kerja_visit->pengiriman_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">PPK MEMBERIKAN INFORMASI KEPADA PPHP MENGENAI
                        JADWAL PENGIRIMAN BARANG
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pengiriman_2" id="pengiriman_2" value="1" {{
                            $kerja_visit->pengiriman_2 != 0 ? 'checked':'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">PPHP MENGETAHUI SARANATRANSPORTASI YANG DIPAKAI
                        SESUAI DOKUMEN KONTRAK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pengiriman_3" id="pengiriman_3" value="1" {{ $pengiriman_3 !=0
                            ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">BARANG YANG DIKIRIM MUDAH RUSAK ATAU BERISIKO TINGGI
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->pengiriman_3_1 == 0)
                        @if ($pengiriman_3)
                        <input type="checkbox" name="pengiriman_3_1" id="pengiriman_3_1" value="1">
                        @else
                        <input type="checkbox" name="pengiriman_3_1" id="pengiriman_3_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="pengiriman_3_1" id="pengiriman_3_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">PENYEDIA BARANG MEMBERIKAN INFORMASI KEPADA PPHP SECARA
                        RINCI TENTANG CARA PENANGANANNYA
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="pengiriman_4" id="pengiriman_4" value="1" {{ $pengiriman_4 !=0
                            ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">BARANG YANG DIKIRIM VERTEKNOLOGI TINGGI
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->pengiriman_4_1 == 0)
                        @if ($pengiriman_4)
                        <input type="checkbox" name="pengiriman_4_1" id="pengiriman_4_1" value="1">
                        @else
                        <input type="checkbox" name="pengiriman_4_1" id="pengiriman_4_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="pengiriman_4_1" id="pengiriman_4_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">PENYEDIA BARANG MEMBERIKAN INFORMASI KEPADA PPHP SECARA
                        RINCI TENTANG CARA PEMAKAIANNYA
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="pengiriman_5"
                            id="pengiriman_5">{{ $kerja_visit->pengiriman_5 }}</textarea>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" style="width: 10%; text-align:left">F. UJI COBA BARANG</th>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="uji_coba_1" id="uji_coba_1" value="1" {{ $uji_coba_1 !=0
                            ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">SETELAH DIKIRIM, BARANG DIUJI-COBA OLEH PENYEDIA BARANG
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->uji_coba_1_1 == 0)
                        @if ($uji_coba_1)
                        <input type="checkbox" name="uji_coba_1_1" id="uji_coba_1_1" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_1_1" id="uji_coba_1_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_1_1" id="uji_coba_1_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">UJI COBA DISAKSIKAN PPHP
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td style="width: 10%">
                        @if ($kerja_visit->uji_coba_1_2 == 0)
                        @if ($uji_coba_1)
                        <input type="checkbox" name="uji_coba_1_2" id="uji_coba_1_2" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_1_2" id="uji_coba_1_2" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_1_2" id="uji_coba_1_2" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">UJI COBA DITUANGKAN DALAM BERITA ACARA
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="uji_coba_2" id="uji_coba_2" value="1" {{ $uji_coba_2 !=0
                            ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">UJI COBA PENGOPERASIAN BARANG MEMERLUKAN KEAHLIAN KHUSUS
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->uji_coba_2_1 == 0)
                        @if ($uji_coba_2)
                        <input type="checkbox" name="uji_coba_2_1" id="uji_coba_2_1" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_2_1" id="uji_coba_2_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_2_1" id="uji_coba_2_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">ADA PELATIHAN KEPADA PPHP
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td style="width: 10%">
                        @if ($kerja_visit->uji_coba_2_2 == 0)
                        @if ($uji_coba_2)
                        <input type="checkbox" name="uji_coba_2_2" id="uji_coba_2_2" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_2_2" id="uji_coba_2_2" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_2_2" id="uji_coba_2_2" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">BIAYA PELATIHAN TERMASUK DALAM HARGA BARANG
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="uji_coba_3" id="uji_coba_3" value="1" {{ $uji_coba_3 !=0
                            ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">HASIL UJI COBA TIDAK SESUAI DENGAN SPESIFIKASI YANG
                        DITENTUKAN DI DALAM KONTRAK
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->uji_coba_3_1 == 0)
                        @if ($uji_coba_3)
                        <input type="checkbox" name="uji_coba_3_1" id="uji_coba_3_1" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_3_1" id="uji_coba_3_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_3_1" id="uji_coba_3_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">PPHP MEMERINTAHKAN PENYEDIA BARANG UNTUK
                        MEMPERBAIKI/MENGGANTI BARANG
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td style="width: 10%">
                        @if ($kerja_visit->uji_coba_3_2 == 0)
                        @if ($uji_coba_3)
                        <input type="checkbox" name="uji_coba_3_2" id="uji_coba_3_2" value="1">
                        @else
                        <input type="checkbox" name="uji_coba_3_2" id="uji_coba_3_2" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="uji_coba_3_2" id="uji_coba_3_2" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">BIAYA PERBAIKAN ATAU PENGGANTIAN SEPENUHNYA DITANGGUNG
                        PENYEDIA BARANG
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="uji_coba_4"
                            id="uji_coba_4">{{ $kerja_visit->uji_coba_4 }}</textarea>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" style="width: 10%; text-align:left">G. USERAH TERIMA BARANG</th>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="serah_terima_1" id="serah_terima_1" value="1" {{
                            $kerja_visit->serah_terima_1 != 0 ? 'checked':'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">PPHP MENERIMA DAN MEMERIKSA BAST (BERITA ACARA
                        SERAH TERIMA) TERHADAP HASIL PEKERJAAN YANG TELAH DISELESAIKAN PENYEDIA
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="serah_terima_2" id="serah_terima_2" value="1" {{
                            $kerja_visit->serah_terima_2 != 0 ? 'checked':'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">WAKTU PENERIMAAN BARANG SESUAI DENGAN YANG
                        TERTERA DI KONTRAK YANG TERHITUNG SEJAK PENANDATANGANAN SP
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="serah_terima_3" id="serah_terima_3" value="1" {{ $serah_terima_3
                            !=0 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">TERDAPAT CACAT / KEKURANGAN-KEKURANGAN HASIL PEKERJAAN
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->serah_terima_3_1 == 0)
                        @if ($serah_terima_3)
                        <input type="checkbox" name="serah_terima_3_1" id="serah_terima_3_1" value="1">
                        @else
                        <input type="checkbox" name="serah_terima_3_1" id="serah_terima_3_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="serah_terima_3_1" id="serah_terima_3_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">PPHP MEMERINTAHKAN PENYEDIA BARANG UNTUK
                        MEMPERBAIKI/MENYELESAIKAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="serah_terima_4"
                            id="serah_terima_4">{{ $kerja_visit->serah_terima_4 }}</textarea>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" style="width: 10%; text-align:left">H. DENDA DAN GANTI RUGI</th>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="denda_1" id="denda_1" value="1" {{ $denda_1 !=0 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">ADA KETERLAMBATAN PENYERAHAN BARANG
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->denda_1_1 == 0)
                        @if ($denda_1)
                        <input type="checkbox" name="denda_1_1" id="denda_1_1" value="1">
                        @else
                        <input type="checkbox" name="denda_1_1" id="denda_1_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="denda_1_1" id="denda_1_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">PPHP MENGETAHUI ADA KETERLAMBATAN PENYERAHAN BARANG OLEH
                        PENYEDIA BARANG
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td style="width: 10%">
                        @if ($kerja_visit->denda_1_2 == 0)
                        @if ($denda_1)
                        <input type="checkbox" name="denda_1_2" id="denda_1_2" value="1">
                        @else
                        <input type="checkbox" name="denda_1_2" id="denda_1_2" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="denda_1_2" id="denda_1_2" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">PPHP MENGETAHUI BAHWA PENYEDIA BARANG WAJIB DIKENAKAN DENDA
                        SESUAI KETENTUAN YAG BERLAKU
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="denda_3"
                            id="denda_3">{{ $kerja_visit->denda_3 }}</textarea>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" style="width: 10%; text-align:left">I. PERPANJANGAN WAKTU PELAKSANAAN</th>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="perpanjangan_1" id="perpanjangan_1" value="1" {{ $perpanjangan_1
                            !=0 ? 'checked' :'' }}>
                    </td>
                    <td style="width: 40%; text-align:left">TERDAPAT PERPANJANGAN WAKTU PELAKSANAAN PEKERJAAN
                    </td>
                    <td style="width: 10%">
                        @if ($kerja_visit->perpanjangan_1_1 == 0)
                        @if ($perpanjangan_1)
                        <input type="checkbox" name="perpanjangan_1_1" id="perpanjangan_1_1" value="1">
                        @else
                        <input type="checkbox" name="perpanjangan_1_1" id="perpanjangan_1_1" value="1" disabled>
                        @endif
                        @else
                        <input type="checkbox" name="perpanjangan_1_1" id="perpanjangan_1_1" value="1" checked>
                        @endif
                    </td>
                    <td style="width: 40%; text-align:left">PPHP MENGETAHUI TERDAPAT PERSETUJUAN PERPANJANGAN WAKTU
                        PELAKSANAAN YANG DITUANGKAN DALAM KONTRAK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="perpanjangan_2"
                            id="perpanjangan_2">{{ $kerja_visit->perpanjangan_2 }}</textarea>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" style="width: 10%; text-align:left">J. LAPORAN HASIL PEKERJAAN</th>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="laporan_1" id="laporan_1" value="1" {{ $kerja_visit->laporan_1 != 0
                        ? 'checked':'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">UNIT KERJA ATAU PPHP DIBERIKAN LAPORAN REALISASI
                        MENGENAI SELURUH AKTIVITAS PEKERJAAN OLEH PPK ATAU PENYEDIA BARANG
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="laporan_2" id="laporan_2" value="1" {{ $kerja_visit->laporan_2 != 0
                        ? 'checked':'' }}>
                    </td>
                    <td colspan="3" style="width: 40%; text-align:left">UNIT KERJA MEMBUAT FOTO-FOTO ATAU DOKUMENTASI
                        TENTANG PELAKSANAAN PEKERJAAN, TERUTAMA PEKERJAAN YAG TIDAK SESUAI DENGAN PERENCANAAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" class="align-middle">
                        KOMENTAR
                    </td>
                    <td colspan="3" style="text-align: left">
                        <textarea type="text" style="height: 100px;width:100%" name="laporan_3"
                            id="laporan_3">{{ $kerja_visit->laporan_3 }}</textarea>
                    </td>
                </tr>
            </table>
            <div class="row justify-content-center mt-3 rounded-sm mx-1" style="background-color: #ADD8E6;">
                <div class="col-md-8 text-center d-grid gap-2 my-2">
                    <a href="/rencana/timeline/" class="btn btn-primary btn-lg mx-2">Kembali</a>
                    <input type="submit" class="btn btn-success btn-lg mx-2" value="Submit">
                </div>
            </div>
        </form>
    </div>
    @endsection
