<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjaDesksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerja_desks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('tahun');
            $table->string('no_kontrak');
            $table->string('nilai_kontrak');
            $table->date('tanggal_kontrak');
            $table->string('nama_penyedia');
            $table->string('nilai_hps');
            $table->string('nilai_penawaran');
            $table->string('metode_penilaian');
            $table->string('metode_pemilihan');
            $table->string('metode_penyampaian');
            $table->string('metode_evaluasi');
            $table->string('jaminan_pelaksanaan');
            $table->date('masa_kontrak_1');
            $table->date('masa_kontrak_2');
            $table->date('masa_jaminan_1');
            $table->date('masa_jaminan_2');
            $table->date('tanggal_sp2d');
            $table->string('no_adendum');
            $table->date('tanggal_sppbj');
            $table->string('substansi_kontrak_1');
            $table->integer('substansi_kontrak_2');
            $table->integer('substansi_kontrak_3');
            $table->integer('substansi_kontrak_4');
            $table->integer('substansi_kontrak_5');
            $table->integer('substansi_kontrak_5_1');
            $table->integer('substansi_kontrak_6_1');
            $table->integer('substansi_kontrak_6_1_1');
            $table->integer('substansi_kontrak_6_1_2');
            $table->integer('substansi_kontrak_6_1_3');
            $table->integer('substansi_kontrak_6_1_4');
            $table->integer('substansi_kontrak_6_1_5');
            $table->integer('substansi_kontrak_6_1_6');
            $table->integer('substansi_kontrak_6_1_7');
            $table->date('tanggal_surat');
            $table->integer('durasi_penerimaan');
            $table->date('tanggal_disetujui');
            $table->integer('surat_pesanan_1');
            $table->integer('surat_pesanan_2');
            $table->integer('penyusunan_program_mutu_1');
            $table->integer('penyusunan_program_mutu_2');
            $table->integer('penyusunan_program_mutu_3');
            $table->integer('penyusunan_program_mutu_4');
            $table->integer('penyusunan_program_mutu_5');
            $table->integer('penyusunan_program_mutu_6');
            $table->integer('penyusunan_program_mutu_7');
            $table->integer('pemeriksaan_bersama_1');
            $table->integer('pemeriksaan_bersama_2');
            $table->integer('pemeriksaan_bersama_3');
            $table->string('uang_muka');
            $table->string('jaminan_uang_muka');
            $table->string('penerbit_jaminan_uang_muka');
            $table->string('kriteria');
            $table->string('keterangan_jaminan_uang_muka');
            $table->string('nama_bank_penerbit');
            $table->integer('pembayaran_uang_muka_1');
            $table->integer('pembayaran_uang_muka_2');
            $table->integer('perubahan_kegiatan_1');
            $table->integer('perubahan_kegiatan_2');
            $table->integer('perubahan_kegiatan_3');
            $table->integer('perubahan_kegiatan_4');
            $table->integer('perubahan_kegiatan_5');
            $table->integer('asuransi_1');
            $table->integer('asuransi_2');
            $table->integer('pengiriman_1');
            $table->integer('pengiriman_2');
            $table->integer('pengiriman_3');
            $table->integer('pengiriman_4');
            $table->integer('pengiriman_4_1');
            $table->integer('uji_coba_barang_1');
            $table->integer('uji_coba_barang_1_1');
            $table->integer('uji_coba_barang_1_2');
            $table->integer('uji_coba_barang_2');
            $table->integer('uji_coba_barang_2_1');
            $table->integer('uji_coba_barang_2_2');
            $table->integer('uji_coba_barang_3');
            $table->integer('uji_coba_barang_3_1');
            $table->integer('uji_coba_barang_3_2');
            $table->integer('serah_terima_barang_1');
            $table->integer('serah_terima_barang_1_1');
            $table->integer('serah_terima_barang_2');
            $table->integer('serah_terima_barang_2_1');
            $table->integer('serah_terima_barang_3');
            $table->integer('pembayaran_1');
            $table->integer('pembayaran_2');
            $table->integer('pembayaran_2_1');
            $table->integer('pembayaran_3');
            $table->integer('denda_1');
            $table->integer('denda_1_1');
            $table->integer('penyesuaian_harga_1');
            $table->integer('penyesuaian_harga_1_1');
            $table->integer('perpanjangan_waktu_1');
            $table->integer('perpanjangan_waktu_1_1');
            $table->integer('laporan_hasil_1');
            $table->integer('laporan_hasil_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerja_desks');
    }
}
