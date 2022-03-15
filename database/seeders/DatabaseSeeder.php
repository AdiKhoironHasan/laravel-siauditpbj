<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Rencana;
use App\Models\Timeline;
use App\Models\Unit;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            "nama" => "Adi Khoiron Hasan",
            "username" => "eronman",
            "email" => "adieron97@gmail.com",
            "level" => "Ketua SPi",
            // bcrypt untuk enkripsi password
            "password" => bcrypt('password')
        ]);

        User::factory(10)->create();

        Unit::factory(5)->create();

        Barang::factory(2)->create();

        Rencana::create([
            'barang_id' => 1,
            'auditor1_id' => 1,
            'auditor2_id' => 2,
            'auditor3_id' => 3,
            'status' => 'Belum Terlaksana',
            'tahun' => 2020,
            'tanggal' => '2020-03-13'
        ]);

        Timeline::create([
            'rencana_id' => 1,
        ]);
    }
}


// $table->integer('barang_id');
// $table->string('nama');
// $table->string('no_kontrak');
// $table->date('tanggal_kontrak');
// $table->integer('nilai_kontrak');
// $table->year('tahun');
// $table->timestamps();