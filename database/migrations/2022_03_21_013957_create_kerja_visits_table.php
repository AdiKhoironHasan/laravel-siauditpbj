<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjaVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerja_visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kerja_desk_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('unit_kerja');
            $table->string('nama_paket');
            $table->integer('tahun');
            $table->string('no_kontrak');
            $table->string('nilai_kontrak');
            $table->integer('penyusunan_mutu_1')->default(0);
            $table->integer('penyusunan_mutu_2')->default(0);
            $table->integer('penyusunan_mutu_3')->default(0);
            $table->integer('penyusunan_mutu_4')->default(0);
            $table->integer('penyusunan_mutu_4_1')->default(0);
            $table->integer('penyusunan_mutu_4_2')->default(0);
            $table->string('penyusunan_mutu_5');
            $table->integer('penyusunan_mutu_6')->default(0);
            $table->integer('penyusunan_mutu_6_1')->default(0);
            $table->string('penyusunan_mutu_7');
            $table->integer('pemeriksaan_bersama_1')->default(0);
            $table->integer('pemeriksaan_bersama_1_1')->default(0);
            $table->string('pemeriksaan_bersama_2');
            $table->integer('pemeriksaan_bersama_3')->default(0);
            $table->integer('pemeriksaan_bersama_3_1')->default(0);
            $table->string('pemeriksaan_bersama_4');
            $table->integer('perubahan_kegiatan_1')->default(0);
            $table->integer('perubahan_kegiatan_1_1')->default(0);
            $table->integer('perubahan_kegiatan_1_2')->default(0);
            $table->string('perubahan_kegiatan_3');
            $table->integer('asuransi_1')->default(0);
            $table->integer('asuransi_1_1')->default(0);
            $table->string('asuransi_2');
            $table->integer('asuransi_3')->default(0);
            $table->string('asuransi_4');
            $table->integer('pengiriman_1')->default(0);
            $table->integer('pengiriman_2')->default(0);
            $table->integer('pengiriman_3')->default(0);
            $table->integer('pengiriman_3_1')->default(0);
            $table->integer('pengiriman_4')->default(0);
            $table->integer('pengiriman_4_1')->default(0);
            $table->string('pengiriman_5');
            $table->integer('uji_coba_1')->default(0);
            $table->integer('uji_coba_1_1')->default(0);
            $table->integer('uji_coba_1_2')->default(0);
            $table->integer('uji_coba_2')->default(0);
            $table->integer('uji_coba_2_1')->default(0);
            $table->integer('uji_coba_2_2')->default(0);
            $table->integer('uji_coba_3')->default(0);
            $table->integer('uji_coba_3_1')->default(0);
            $table->integer('uji_coba_3_2')->default(0);
            $table->string('uji_coba_4');
            $table->integer('serah_terima_1')->default(0);
            $table->integer('serah_terima_2')->default(0);
            $table->integer('serah_terima_3')->default(0);
            $table->integer('serah_terima_3_1')->default(0);
            $table->string('serah_terima_4');
            $table->integer('denda_1')->default(0);
            $table->integer('denda_1_1')->default(0);
            $table->integer('denda_1_2')->default(0);
            $table->string('denda_3');
            $table->integer('perpanjangan_1')->default(0);
            $table->integer('perpanjangan_1_1')->default(0);
            $table->string('perpanjangan_2');
            $table->integer('laporan_1')->default(0);
            $table->integer('laporan_2')->default(0);
            $table->string('laporan_3');
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
        Schema::dropIfExists('kerja_visits');
    }
}
