<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRencanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencanas', function (Blueprint $table) {
            $table->id();
            // $table->tinyIncrements('id');

            $table->foreignId('auditor1_id');
            $table->foreignId('auditor2_id');
            $table->foreignId('auditor3_id');
            $table->foreignId('auditee_id');
            $table->string('nomor_surat', 60);
            $table->date('monitoring_awal');
            $table->date('monitoring_akhir');
            $table->date('tanggal_desk');
            $table->date('tanggal_visit');
            $table->year('tahun');
            $table->enum('status', ['Terlaksana', 'Belum Terlaksana', 'Tidak Terlaksana']);
            $table->timestamps();
            // $table->foreignId('barang_id')->unique()->unique()->constrained()->cascadeOnDelete();
            // $table->date('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rencanas');
    }
}
