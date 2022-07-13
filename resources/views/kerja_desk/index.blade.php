@extends('layouts.main')

@push('script')
<script>
    $(document).on("change", "#A", function () {
        if ($(this).prop("checked")) {
            $("#B").attr("disabled", false);
        } else {
            $("#B").attr("disabled", true);
            $("#B").prop("checked", false);
            $("#C").attr("disabled", true);
            $("#C").prop("checked", false);
        }
    });

    $(document).on("change", "#B", function () {
        if ($(this).prop("checked")) {
            $("#C").attr("disabled", false);
        } else {
            $("#C").attr("disabled", true);
            $("#C").prop("checked", false);
        }
    });

</script>
@endpush

@section('content')
<div class="card card-primary">
    <div class="card-header">
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
        <form action="/kerjadesk/hasil" method="POST">
            @csrf
            <input type="hidden" name="rencana_id" id="rencana_id" value="#">

            <input type="checkbox" name="A" id="A" value="1">A
            <br>
            <input type="checkbox" name="B" id="B" class="B" value="1" disabled>B
            <br>
            <input type="checkbox" name="C" id="C" class="C" value="1" disabled>C
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
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TAHNUN ANGGARAN</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NAMA PAKET</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NOMOR KONTRAK</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NILAI KONTRAK</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TANGGAL KONTRAK</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <th colspan="2" style="width: 40%; text-align:left">A. IDENTITAS PAKET</th>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NAMA PENYEDIA</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NILAI HPS</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NILAI PENAWARAN</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">METODE PENILAIAN KUALIFIKASI</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">METODE PEMILIHAN PENGADAAN BARANG</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">METODE PENYAMPAIAN DOKUMEN</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">JAMINAN PELAKSANAAN</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">MASA KONTRAK</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">MASA JAMINAN PELAKSANAAN</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TANGGAL SP2D</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NOMOR ADENDUM</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <th colspan="2" style="width: 40%; text-align:left">B. PENANDATANGANAN KONTRAK</th>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TANGGAL SPPBJ</td>
                    <td>10/10/10</td>
                </tr>
                <tr>
                    <td colspan="2" style="width: 40%;text-align:left">SUBSTANSI KONTRAK</td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">
                        V
                    </td>
                    <td style="text-align: left">BAHASA DAN REDAKSIONAL</td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        V
                    </td>
                    <td style="text-align: left">ANGKA DAN HURUF</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">PARAF PADA SETIAP LEMBAR DOKUMEN KONTRAK</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">MATERAI</td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">KONTRAK DITANDATANGANI PIHAK DIREKSI PENYEDIA</td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">ADA SURAT KUASA DARI PIHAK DIREKSI KEPADA PENANDA TANGAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">
                        <input type="checkbox" name="substansi_kontrak_6" id="substansi_kontrak_6" value="1">
                    </td>
                    <td style="width: 40%; text-align:left">TERDAPAT PERTENTANGAN ANTAR BAGIAN KONTRAK</td>
                    <td style="width: 10%">
                        <input type="checkbox" name="substansi_kontrak_6_1" id="substansi_kontrak_6_1" value="1">
                    </td>
                    <td style="width: 40%; text-align:left">KESESUAIAN HIARARKI ACUAN</td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        <input type="checkbox" name="substansi_kontrak_6_1_1" id="substansi_kontrak_6_1_1" value="1">
                    </td>
                    <td style="text-align: left">1. Adendum Surat Perjanjian</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        <input type="checkbox" name="substansi_kontrak_6_1_2" id="substansi_kontrak_6_1_2" value="1">
                    </td>
                    <td style="text-align: left">2. Pokok Perjanjian</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        <input type="checkbox" name="substansi_kontrak_6_1_3" id="substansi_kontrak_6_1_3" value="1">
                    </td>
                    <td style="text-align: left">3. Surat Penawaran, beserta rincian penawaran biaya</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        <input type="checkbox" name="substansi_kontrak_6_1_4" id="substansi_kontrak_6_1_4" value="1">
                    </td>
                    <td style="text-align: left">4. Syarat-syarat khusus kontrak</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        <input type="checkbox" name="substansi_kontrak_6_1_5" id="substansi_kontrak_6_1_5" value="1">
                    </td>
                    <td style="text-align: left">5. Syarat-syarat Umum Kontrak</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        <input type="checkbox" name="substansi_kontrak_6_1_6" id="substansi_kontrak_6_1_6" value="1">
                    </td>
                    <td style="text-align: left">6. Kerangka acuan Kerja</td>
                </tr>
                <tr>
                    <td style="width: 55%"></td>
                    <td>
                        <input type="checkbox" name="substansi_kontrak_6_1_7" id="substansi_kontrak_6_1_7" value="1">
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
                    <td>10/10/10</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">DURASI PENERIMAAN BARANG</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">TANGGAL DISETUJUI/DITANDATANGANI</td>
                    <td>10/10/10</td>
                </tr>
            </table>

            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">SUDAH DITANDATANGANI OLEH PENYEDIA</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
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
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">1. Informasi Pengadaan Barang</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">2. Organisasi Kerja Penyedia</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">3. Jadwal Pelaksanaan Pekerjaan</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">4. Prosedur Pelaksanaan Kegiatan</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">5. Prosedur Instruksi Kerja</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">6. Pelaksanaan Kerja</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">TERDAPAT REVISI PROGRAM MUTU</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left">3. PEMERIKSAAN BERSAMA</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">
                        PEMERIKSAAN KONDISI LAPANGAN OLEH PPK DENGAN PENYEDIA PADA TAHAP
                        AWAL PELAKSANAAN KONTRAK DISERTAI BERITA ACARA
                    </td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">TERDAPAT PERUBAHAN ISI KONTRAK SETELAH PEMERIKSAAN
                        BERSAMA</td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">ADENDUM KONTRAK TERKAIT PERUBAHAN</td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td colspan="2" style="text-align:left">4. PEMBAYARAN UANG MUKA</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">UANG MUKA</td>
                    <td class="align-bottom">Rp. Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">JAMINAN UANG MUKA</td>
                    <td class="align-bottom">Rp. Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">PENERBIT JAMINAN UANG MUKA</td>
                    <td class="align-bottom">Dropdown Option</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">KRITERIA</td>
                    <td class="align-bottom">Dropdown Option</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">KETERANGAN JAMINAN UANG MUKA</td>
                    <td class="align-bottom">Dropdown Option</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">NAMA BANK PENERBIT</td>
                    <td class="align-bottom">Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">KETERANGAN</td>
                    <td class="align-bottom">Rp. Manual Input</td>
                </tr>
                <tr>
                    <td style="width: 40%;text-align:left">UANG MUKA</td>
                    <td class="align-bottom">Dropdown Option</td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">
                        PENYEDIA MENYERTAKAN RENCANA PENGGUNAAN UANG MUKA DALAM PERMOHONAN PENGAMBILAN MUKA
                        SECARATERTULIS KEPADA PPK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
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
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">ADA PERUBAHAN PEKERJAAN</td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">
                        ADA PERINTAH YANG DIBUAT PPK SECARA TERTULIS KEPADA PENYEDIA
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>V</td>
                    <td style="text-align: left">NEGOSIASI TEKNIS</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>V</td>
                    <td style="text-align: left">HARGA MENGACU PADA KETENTUAN YANG TERCANTUM DALAM KONTRAK AWAL</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>V</td>
                    <td style="text-align: left">HASIL NEGOSIASI DITUANGKAN DALAM BERITA ACARA SEBAGAI DASAR
                        PENYUSUNAN ADENDUM KONTRAK</td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td colspan="2" style="text-align:left">6. ASURANSI</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">
                        PENYEDIA TELAH MENGASURANSIKAN BARANG-BARANG YANG AKAN DIKIRIM SESUAI DENGAN PERATURAN
                        PERUNDANG-UNDANGAN YANG BERLAKU DAN KETENTUAN YANG TERCANTUM DALAM KONTRAK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">
                        PENERIMA MANFAAT SUDAH DIJELASKAN DALAM DOKUMEN ASURANSI YANG DISESUAIKAN DENGAN KETENTUAN
                        KONTRAK
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left">7. PENGIRIMAN</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">
                        PENYEDIA MEMBERI INFORMASI KEPADA PPK TENTANG JADWAL PENGIRIMAN BARANG
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">
                        PENYEDIA MEMBERIKAN DOKUMEN PENGIRIMAN BARANG KEPADA PPK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">
                        SARANA TRANSPORTASI YANG DIGUNAKAN SESUAI DENGAN DOKUMEN KONTRAK
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="text-align: left">
                        PENERIMA MANFAAT SUDAH DIJELASKAN DALAM DOKUMEN ASURANSI YANG DISESUAIKAN DENGAN KETENTUAN
                        KONTRAK
                    </td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">BARANG MUDAH RUSAK ATAU BERISIKO TINGGI</td>
                    <td style="width: 10%">V</td>
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
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">UJI COBA DILAKUKAN OLEH PENYEDIA</td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">DISAKSIKAN PPK/PPHP</td>
                </tr>
                <tr>
                    <td style="width: 10%" colspan="2"></td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">DITUANGKAN DALAM BERITA ACARA</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">MEMERLUKAN KEAHLIAN KHUSUS</td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">PELATIHAN KEPADA PPK/PPHP OLEH PENYEDIA BARANG</td>
                </tr>
                <tr>
                    <td style="width: 10%" colspan="2"></td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">BIAYA PELATIHAN TERMASUK HARGA BARANG</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">SESUAI SPESIFIKASI DALAM KONTRAK</td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">
                        PENYEDIA BARANG MENGGANTI/MEMPERBAIKI BARANG TERSEBUT
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%" colspan="2"></td>
                    <td style="width: 10%">V</td>
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
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">SETELAH PEKERJAAN 100%, ADA PERMINTAAN TERTULIS DARI
                        PENYEDIA BARANG KEPADA PPK UNTUK PENYERAHAN PEKERJAAN</td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">BERITA ACARA SERAH TERIMA (BAST) TERHADAP HASIL
                        PEKERJAAN YANG TELAH DISELESAIKAN OLEH PENYEDIA
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">ADA KEKURANGAN-KEKURANGAN DAN / ATAU CACAT HASIL
                        PEKERJAAN</td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">
                        PENYEDIA WAJIB MEMPERBAIKI/MENYELESAIKAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td colspan="3" style="width: 40%; text-align:left">WAKTU PENERIMAAN BARANG SESUAI DENGAN YANG
                        TERTERA DI KONTRAK TERHITUNG SEJAK PENANDATANGANAN SURAT PESANAN</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        10. PEMBAYARAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td colspan="3" style="width: 40%; text-align:left">PEMBAYARAN DILAKSANAKAN SETELAH BARANG
                        DITERIMA SESUAI BAST BARANG</td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">DILENGKAPI BERITA ACARA HASIL UJI COBA</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">PEMBAYARAN MENGGUNAKAN L/C</td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">MENGIKUTI KETENTUAN UMUM YANG BERLAKU DI BIDANG
                        PERDAGANGAN</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        11. DENDA DAN GANTI RUGI
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">ADA KETERLAMBATAN</td>
                    <td style="width: 10%">V</td>
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
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">ADA PENYESUAIAN HARGA</td>
                    <td style="width: 10%">V</td>
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
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">ADA PERSETUJUAN PERPANJANGAN WAKTU PELAKSANAAN</td>
                    <td style="width: 10%">V</td>
                    <td style="width: 40%; text-align:left">DITUANGKAN DALAM ADENDUM KONTRAK
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        14. LAPORAN HASIL PEKERJAAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td colspan="3" style="width: 40%; text-align:left">HASIL PEMERIKSAAN DITUANGKAN DALAM LAPORAN
                        KEMAJUAN
                        HASIL PEKERJAAN
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%">V</td>
                    <td colspan="3" style="width: 40%; text-align:left">DIBUAT LAPORAN REALISASI MENGENAI SELURUH
                        AKTIVITAS
                        PEKERJAAN UNTUK PENGENDALIAN DAN PENGAWASAN
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
    <!-- /.card-body -->
</div>

<script>
    $(document).ready(function(){
    $('#substansi_kontrak_6').change(function () {
        if ($(this).attr("checked")) {
            $('#substansi_kontrak_6_1').attr('disabled', true);
        } else {
            $('#substansi_kontrak_6_1').attr('disabled', false);
        }
    });
});
</script>

@endsection
