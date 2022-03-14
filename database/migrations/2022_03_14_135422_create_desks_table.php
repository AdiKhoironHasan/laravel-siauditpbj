<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rencana_id');
            $table->string('tipe_monitoring');
            $table->date('tipe_monitoring_awal');
            $table->date('tipe_monitoring_akhir');
            $table->date('tanggal_monitoring');
            $table->string('kontrak_1');
            $table->string('kontrak_2');
            $table->string('kontrak_3');
            $table->string('kontrak_4');
            $table->string('surat_pesanan_1');
            $table->string('surat_pesanan_2');
            $table->string('surat_pesanan_3');
            $table->string('surat_pesanan_4');
            $table->string('penyusunan_program_mutu');
            $table->string('pemeriksaan_bersama');
            $table->string('pembayaran_uang_muka_1');
            $table->string('pembayaran_uang_muka_2');
            $table->string('uji_coba_barang');
            $table->string('serah_terima_barang_1');
            $table->string('serah_terima_barang_2');
            $table->string('catatan');
            $table->string('kriteria');
            $table->string('akar_penyebab');
            $table->string('akibat');
            $table->string('rekomendasi');
            $table->string('tanggapan_auditee');
            $table->string('rencana_perbaikan');
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
        Schema::dropIfExists('desks');
    }
}
