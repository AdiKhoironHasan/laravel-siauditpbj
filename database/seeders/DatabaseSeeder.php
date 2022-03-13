<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\PaketBarang;
use App\Models\RKA;
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
        User::factory(10)->create();

        User::create([
            "nama" => "Adi Khoiron Hasan",
            "username" => "eronman",
            "email" => "adieron97@gmail.com",
            // bcrypt untuk enkripsi password
            "password" => bcrypt('password')
        ]);

        Unit::factory(5)->create();
        // RKA::create([
        //     "barang_id" => 1,
        //     "nama" => ""
        // ]);

        Barang::factory(10)->create();
    }
}


// $table->integer('barang_id');
// $table->string('nama');
// $table->string('no_kontrak');
// $table->date('tanggal_kontrak');
// $table->integer('nilai_kontrak');
// $table->year('tahun');
// $table->timestamps();