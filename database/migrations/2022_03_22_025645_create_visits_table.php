<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kerja_visit_id')->unique()->constrained()->cascadeOnDelete();
            // $table->foreignId('kerja_desk_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('tipe_monitoring')->nullable();;
            $table->date('masa_monitoring_awal');
            $table->date('masa_monitoring_akhir');
            $table->date('tanggal_monitoring');
            $table->string('penyusunan_mutu_1');
            $table->string('penyusunan_mutu_2');
            $table->string('pemeriksaan_1');
            $table->string('pemeriksaan_2');
            $table->string('perubahan_kegiatan');
            $table->string('asuransi_1');
            $table->string('asuransi_2');
            $table->string('pengiriman');
            $table->string('uji_coba');
            $table->string('serah_terima');
            $table->string('denda');
            $table->string('perpanjangan');
            $table->string('laporan');
            $table->string('catatan')->nullable();;
            $table->string('kriteria')->nullable();;
            $table->string('akar_penyebab')->nullable();;
            $table->string('akibat')->nullable();;
            $table->string('rekomendasi')->nullable();;
            $table->string('tanggapan_auditee')->nullable();;
            $table->string('rencana_perbaikan')->nullable();;
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
        Schema::dropIfExists('visits');
    }
}
