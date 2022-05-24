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

        User::create([
            'name' => 'Prih Diantoro Abda`u',
            'username' => 'abdau',
            'email' => 'abdau@gmail.com',
            'level' => 'Auditor',
            'npak' => '84420887698789790',
            'nohp' => '0819087756877',
            'password' => bcrypt('password'),
            'foto' => 'default/empty-foto.png',
            'ttd' => 'default/empty-ttd.png'
        ]);

        User::create([
            'name' => 'Dwi Novia Prasetyanti, S.Kom., M.Cs.',
            'username' => 'novia',
            'email' => 'novia@gmail.com',
            'level' => 'Auditee',
            'npak' => '84420887698789790',
            'nohp' => '0819087756877',
            'password' => bcrypt('password'),
            'foto' => 'default/empty-foto.png',
            'ttd' => 'default/empty-ttd.png'
        ]);

        User::create([
            'name' => 'Eka Dyah Puspitasari, S.Pd., M.Hum.',
            'username' => 'dyah',
            'email' => 'dyah@gmail.com',
            'level' => 'Auditee',
            'npak' => '84420887698789790',
            'nohp' => '08190877 56877',
            'password' => bcrypt('password'),
            'foto' => 'default/empty-foto.png',
            'ttd' => 'default/empty-ttd.png'
        ]);

        User::factory(10)->create();
    }
}
