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
            // $table->foreignId('barang_id')->unique()->unique()->constrained()->cascadeOnDelete();
            $table->foreignId('auditor1_id');
            $table->foreignId('auditor2_id');
            $table->foreignId('auditor3_id');
            $table->foreignId('auditee_id');
            $table->enum('status', ['Terlaksana', 'Belum Terlaksana', 'Tidak Terlaksana']);
            $table->year('tahun');
            $table->date('tanggal');
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
        Schema::dropIfExists('rencanas');
    }
}
