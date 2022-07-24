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
            // $table->foreignId('rencana_id');
            $table->foreignId('rencana_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('unit_kerja');
            $table->string('nama_paket');
            $table->integer('tahun');
            $table->string('no_kontrak');
            $table->integer('nilai_kontrak');
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
            $table->date('masa_jaminan_1')->nullable();
            $table->date('masa_jaminan_2')->nullable();
            $table->date('tanggal_sp2d');
            $table->string('no_adendum');
            $table->date('tanggal_sppbj');
            // $table->integer('substansi_kontrak_1')->default(0);
            $table->boolean('substansi_kontrak_2')->default(0);
            $table->boolean('substansi_kontrak_3')->default(0);
            $table->boolean('substansi_kontrak_4')->default(0);
            $table->boolean('substansi_kontrak_5')->default(0);
            $table->boolean('substansi_kontrak_5_1')->default(0);
            $table->boolean('substansi_kontrak_6')->default(0);
            $table->boolean('substansi_kontrak_6_1')->default(0);
            $table->boolean('substansi_kontrak_6_1_1')->default(0);
            $table->boolean('substansi_kontrak_6_1_2')->default(0);
            $table->boolean('substansi_kontrak_6_1_3')->default(0);
            $table->boolean('substansi_kontrak_6_1_4')->default(0);
            $table->boolean('substansi_kontrak_6_1_5')->default(0);
            $table->boolean('substansi_kontrak_6_1_6')->default(0);
            $table->boolean('substansi_kontrak_6_1_7')->default(0);
            $table->date('tanggal_surat');
            $table->tinyInteger('durasi_penerimaan');
            $table->date('tanggal_disetujui');
            $table->boolean('surat_pesanan_1')->default(0);
            $table->boolean('surat_pesanan_2')->default(0);
            $table->boolean('penyusunan_program_mutu_1')->default(0);
            $table->boolean('penyusunan_program_mutu_2')->default(0);
            $table->boolean('penyusunan_program_mutu_3')->default(0);
            $table->boolean('penyusunan_program_mutu_4')->default(0);
            $table->boolean('penyusunan_program_mutu_5')->default(0);
            $table->boolean('penyusunan_program_mutu_6')->default(0);
            $table->boolean('penyusunan_program_mutu_7')->default(0);
            $table->boolean('pemeriksaan_bersama_1')->default(0);
            $table->boolean('pemeriksaan_bersama_2')->default(0);
            $table->boolean('pemeriksaan_bersama_2_1')->default(0);
            $table->string('uang_muka');
            $table->string('jaminan_uang_muka')->nullable();
            $table->enum('penerbit_jaminan_uang_muka', ['Bank Umum', 'Perusahaan Penjaminan', 'Perusahaan Asuransi'])->nullable();
            $table->enum('kriteria', ['Usaha Kecil', 'Usaha Non Kecil', 'Kontrak Tahun Jamak'])->nullable();
            $table->enum('keterangan_jaminan_uang_muka', ['Sesuai', 'Tidak Sesuai'])->nullable();
            $table->string('nama_bank_penerbit')->nullable();
            $table->boolean('pembayaran_uang_muka_1')->default(0);
            $table->boolean('pembayaran_uang_muka_2')->default(0);
            $table->boolean('perubahan_kegiatan_1')->default(0);
            $table->boolean('perubahan_kegiatan_1_1')->default(0);
            $table->boolean('perubahan_kegiatan_1_2')->default(0);
            $table->boolean('perubahan_kegiatan_1_3')->default(0);
            $table->boolean('perubahan_kegiatan_1_4')->default(0);
            $table->boolean('asuransi_1')->default(0);
            $table->boolean('asuransi_2')->default(0);
            $table->boolean('pengiriman_1')->default(0);
            $table->boolean('pengiriman_2')->default(0);
            $table->boolean('pengiriman_3')->default(0);
            $table->boolean('pengiriman_4')->default(0);
            $table->boolean('pengiriman_4_1')->default(0);
            $table->boolean('uji_coba_barang_1')->default(0);
            $table->boolean('uji_coba_barang_1_1')->default(0);
            $table->boolean('uji_coba_barang_1_2')->default(0);
            $table->boolean('uji_coba_barang_2')->default(0);
            $table->boolean('uji_coba_barang_2_1')->default(0);
            $table->boolean('uji_coba_barang_2_2')->default(0);
            $table->boolean('uji_coba_barang_3')->default(0);
            $table->boolean('uji_coba_barang_3_1')->default(0);
            $table->boolean('uji_coba_barang_3_2')->default(0);
            $table->boolean('serah_terima_barang_1')->default(0);
            $table->boolean('serah_terima_barang_1_1')->default(0);
            $table->boolean('serah_terima_barang_2')->default(0);
            $table->boolean('serah_terima_barang_2_1')->default(0);
            $table->boolean('serah_terima_barang_3')->default(0);
            $table->boolean('pembayaran_1')->default(0);
            $table->boolean('pembayaran_2')->default(0);
            $table->boolean('pembayaran_3')->default(0);
            $table->boolean('pembayaran_3_1')->default(0);
            $table->boolean('denda_1')->default(0);
            $table->boolean('denda_1_1')->default(0);
            $table->boolean('penyesuaian_harga_1')->default(0);
            $table->boolean('penyesuaian_harga_1_1')->default(0);
            $table->boolean('perpanjangan_waktu_1')->default(0);
            $table->boolean('perpanjangan_waktu_1_1')->default(0);
            $table->boolean('laporan_hasil_1')->default(0);
            $table->boolean('laporan_hasil_2')->default(0);
            $table->timestamps();
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
