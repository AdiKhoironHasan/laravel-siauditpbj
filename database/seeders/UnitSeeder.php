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
                'user_id' => 3,
                'name' => 'BAAK',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 4,
                'name' => 'Keuangan',
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
