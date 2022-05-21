<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $levels = [
        //         ['name' => `Prih Diantoro Abda'u`, 'username' => 'abdau', 'level' => 'Auditor'],
        //         ['name' => 'Luthfi Prananda', 'username' => 'abdau', 'level' => 'Auditor'],
        // ];

        User::create([
            'name' => 'Rostika Listyaningrum',
            'username' => 'eronman',
            'email' => 'rostika@gmail.com',
            'level' => 'Ketua SPI',
            'npak' => '8442087087768889',
            'nohp' => '081906707879',
            'password' => bcrypt('password'),
            'foto' => 'default/empty-foto.png',
            'ttd' => 'default/empty-ttd.png'
        ]);

        User::factory(50)->create();
    }
}
