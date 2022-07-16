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
            $table->string('substansi_kontrak_1')->default(0);
            $table->integer('substansi_kontrak_2')->default(0);
            $table->integer('substansi_kontrak_3')->default(0);
            $table->integer('substansi_kontrak_4')->default(0);
            $table->integer('substansi_kontrak_5')->default(0);
            $table->integer('substansi_kontrak_5_1')->default(0);
            $table->integer('substansi_kontrak_6_1')->default(0);
            $table->integer('substansi_kontrak_6_1_1')->default(0);
            $table->integer('substansi_kontrak_6_1_2')->default(0);
            $table->integer('substansi_kontrak_6_1_3')->default(0);
            $table->integer('substansi_kontrak_6_1_4')->default(0);
            $table->integer('substansi_kontrak_6_1_5')->default(0);
            $table->integer('substansi_kontrak_6_1_6')->default(0);
            $table->integer('substansi_kontrak_6_1_7')->default(0);
            $table->date('tanggal_surat');
            $table->integer('durasi_penerimaan');
            $table->date('tanggal_disetujui');
            $table->integer('surat_pesanan_1');
            $table->integer('surat_pesanan_2');
            $table->integer('penyusunan_program_mutu_1')->default(0);
            $table->integer('penyusunan_program_mutu_2')->default(0);
            $table->integer('penyusunan_program_mutu_3')->default(0);
            $table->integer('penyusunan_program_mutu_4')->default(0);
            $table->integer('penyusunan_program_mutu_5')->default(0);
            $table->integer('penyusunan_program_mutu_6')->default(0);
            $table->integer('penyusunan_program_mutu_7')->default(0);
            $table->integer('pemeriksaan_bersama_1')->default(0);
            $table->integer('pemeriksaan_bersama_2')->default(0);
            $table->integer('pemeriksaan_bersama_2_1')->default(0);
            $table->string('uang_muka');
            $table->string('jaminan_uang_muka');
            $table->string('penerbit_jaminan_uang_muka');
            $table->string('kriteria');
            $table->string('keterangan_jaminan_uang_muka');
            $table->string('nama_bank_penerbit');
            $table->integer('pembayaran_uang_muka_1')->default(0);
            $table->integer('pembayaran_uang_muka_2')->default(0);
            $table->integer('perubahan_kegiatan_1')->default(0);
            $table->integer('perubahan_kegiatan_1_1')->default(0);
            $table->integer('perubahan_kegiatan_1_2')->default(0);
            $table->integer('perubahan_kegiatan_1_3')->default(0);
            $table->integer('perubahan_kegiatan_1_4')->default(0);
            $table->integer('asuransi_1')->default(0);
            $table->integer('asuransi_2')->default(0);
            $table->integer('pengiriman_1')->default(0);
            $table->integer('pengiriman_2')->default(0);
            $table->integer('pengiriman_3')->default(0);
            $table->integer('pengiriman_4')->default(0);
            $table->integer('pengiriman_4_1')->default(0);
            $table->integer('uji_coba_barang_1')->default(0);
            $table->integer('uji_coba_barang_1_1')->default(0);
            $table->integer('uji_coba_barang_1_2')->default(0);
            $table->integer('uji_coba_barang_2')->default(0);
            $table->integer('uji_coba_barang_2_1')->default(0);
            $table->integer('uji_coba_barang_2_2')->default(0);
            $table->integer('uji_coba_barang_3')->default(0);
            $table->integer('uji_coba_barang_3_1')->default(0);
            $table->integer('uji_coba_barang_3_2')->default(0);
            $table->integer('serah_terima_barang_1')->default(0);
            $table->integer('serah_terima_barang_1_1')->default(0);
            $table->integer('serah_terima_barang_2')->default(0);
            $table->integer('serah_terima_barang_3')->default(0);
            $table->integer('serah_terima_barang_3_1')->default(0);
            $table->integer('pembayaran_1')->default(0);
            $table->integer('pembayaran_2')->default(0);
            $table->integer('pembayaran_2_1')->default(0);
            $table->integer('pembayaran_3')->default(0);
            $table->integer('denda_1')->default(0);
            $table->integer('denda_1_1')->default(0);
            $table->integer('penyesuaian_harga_1')->default(0);
            $table->integer('penyesuaian_harga_1_1')->default(0);
            $table->integer('perpanjangan_waktu_1')->default(0);
            $table->integer('perpanjangan_waktu_1_1')->default(0);
            $table->integer('laporan_hasil_1')->default(0);
            $table->integer('laporan_hasil_2')->default(0);
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
