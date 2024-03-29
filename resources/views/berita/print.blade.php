@extends('layouts.print.main')

@section('content')
<table style="width: 100%;">
    <tr>
        <!-- <td style="width: 20%" rowspan="3" class="bdr bdr-none-bot" style="padding-top: 30px"><img src="../AdminLTE/dist/img/logo_pnc.png" style="width: 100px; height: 100px"></td> -->
        <td style="width: 50%;" rowspan="2" class="bdr" colspan="3"><b>FORM</b></td>
        {{-- <td style="width: 15%;" class="txt-lft-20 bdr-none">Kode Dokumen</td>
        <td style="width: 35%;" class="txt-lft bdr-none"></td> --}}
    </tr>
    <tr>
        {{-- <td class="txt-lft-20 bdr-none">Revisi</td>
        <td class="txt-lft bdr-none">:</td> --}}
    </tr>
    <tr>
        <td rowspan="2" class="bdr" colspan="3"><b>BERITA ACARA FINAL MEETING</b></td>
        {{-- <td class="txt-lft-20 bdr-none">Tanggal Terbit</td>
        <td class="txt-lft bdr-none">:</td> --}}
    </tr>
    <tr>
        <!-- <td class="bdr bdr-none-top" style="padding-top: 10px;">
                <h3><b>SPI</b></h3>
            </td> -->
        {{-- <td class="txt-lft-20 bdr-none">Halaman</td>
        <td class="txt-lft bdr-none">:</td> --}}
    </tr>
</table>
<br>
<br>
<div class="text-center">
    <h4>BERITA ACARA VISITASI</h4>
</div>
<br>
<p>Dengan ini kami dari pihak Auditor Internal :</p>
<table style="width: 100%;">
    <tr>
        <td style="width: 8%;" class="bdr-none txt-lft">name</td>
        <td class="bdr-none">:</td>
        <td class="txt-lft bdr-none">{{ $berita->kerja_visit->kerja_desk->rencana->auditor1->name }}</td>
    </tr>
    <tr>
        <td class="bdr-none txt-lft">Jabatan</td>
        <td class="bdr-none">:</td>
        <td class="txt-lft bdr-none">Auditor</td>
    </tr>
</table>
<br>
<p>Mengadakan final meeting di kantor pihak auditi <b>{{ $berita->status }}</b> hasil pemeriksaan yang telah
    dilaksanakan oleh
    pihak Auditor.</p>
<p>Dengan demikian hasil final meeting yang dilakukan antara auditor dan auditi dengan data temuan audit (DTA) terlampir
</p>
<br>
<table style="width: 100%;">
    <tr>
        <td colspan="2" class="txt-rght-50 bdr-none" style="text-align: right">Cilacap, &nbsp;{{ date('d F Y',
            strtotime($berita->tanggal))
            }}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td colspan="2" style="height: 20px;" class="bdr-none"></td>
    </tr>
    <tr>
        <td style="width: 50%;" class="bdr-none">Pihak Auditi</td>
        <td class="bdr-none">Pihak Auditor</td>
    </tr>
    <tr>
        <td class="bdr-none">
            <img src="/uploads/{{ $berita->kerja_visit->kerja_desk->rencana->auditee->ttd }}" height="100" width="100">
        </td>
        <td class="bdr-none">
            <img src="/uploads/{{ $berita->kerja_visit->kerja_desk->rencana->auditor1->ttd }}" height="100" width="100">
        </td>
    </tr>
    <tr>
        <td class="bdr-none">{{ $berita->kerja_visit->kerja_desk->rencana->auditee->name }}</td>
        <td class="bdr-none">{{ $berita->kerja_visit->kerja_desk->rencana->auditor1->name }}</td>
    </tr>
</table>
<script>
    window.print();
</script>
@endsection
