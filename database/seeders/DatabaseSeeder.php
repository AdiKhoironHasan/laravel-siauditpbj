<?php

namespace Database\Seeders;

use App\Models\Barang;
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