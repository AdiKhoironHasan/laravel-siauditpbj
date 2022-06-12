<?php

namespace Database\Seeders;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('level', 'Auditee')->take(3)->get();

        Unit::insert([
            [
                'user_id' => 5,
                'name' => 'Jurusan Teknik Elektronika',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 6,
                'name' => 'Jurusan Teknik Listrik',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 7,
                'name' => 'PPM',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 8,
                'name' => 'UPT Bahasa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 9,
                'name' => 'Jurusan Teknik Mesin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 10,
                'name' => 'P4MP',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 11,
                'name' => 'Jurusan Teknik Informatika',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 12,
                'name' => 'UPT Perpustakaan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'name' => 'Satuan Pengawas Internal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 13,
                'name' => 'Prodi TPPL',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 14,
                'name' => 'Keuangan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 15,
                'name' => 'Umum',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 16,
                'name' => 'UPT Pemeliharaan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 17,
                'name' => 'Akademik',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 18,
                'name' => 'UPT TIK',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            // [
            //     'user_id' => 3,
            //     'name' => 'Perpustakaan',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s')
            // ],
            // [
            //     'user_id' => 4,
            //     'name' => 'Umum',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s')
            // ],
            // [
            //     'user_id' => 5,
            //     'name' => 'UP3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s')
            // ]
        ]);
    }
}
