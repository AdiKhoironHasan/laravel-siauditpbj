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
        // AUDITOR
        User::create([
            'name' => 'Rostika Listyaningrum, S.Si., M.Si.',
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
            'name' => 'Prih Diantono Abda’u, S.Kom., M.Kom.',
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
            'name' => 'Farendah Herwina',
            'username' => 'farendah',
            'email' => 'farendah@gmail.com',
            'level' => 'Auditor',
            'npak' => '84420887698789790',
            'nohp' => '0819087756877',
            'password' => bcrypt('password'),
            'foto' => 'default/empty-foto.png',
            'ttd' => 'default/empty-ttd.png'
        ]);

        User::create([
            'name' =>     'Lutfi Syafirullah, S.T., M.Kom.',
            'username' => 'lutfi',
            'email' => 'lutfi@gmail.com',
            'level' => 'Auditor',
            'npak' => '84420887698789790',
            'nohp' => '0819087756877',
            'password' => bcrypt('password'),
            'foto' => 'default/empty-foto.png',
            'ttd' => 'default/empty-ttd.png'
        ]);

        User::create([
            'name' => 'Riyadi S.E., M.Si.',
            'username' => 'riyadi',
            'email' => 'riyadi@gmail.com',
            'level' => 'Direktur',
            'npak' => '198509172019031005',
            'nohp' => '0819087756877',
            'password' => bcrypt('password'),
            'foto' => 'default/empty-foto.png',
            'ttd' => 'default/empty-ttd.png'
        ]);

        // AUDITEE
        User::create([
            'name' => 'Tri Tarwoco S.E., M.Si.',
            'username' => 'tarwoco',
            'email' => 'tritarwoco@gmail.com',
            'level' => 'Auditee',
            'npak' => '198509172019031005',
            'nohp' => '0819087756877',
            'password' => bcrypt('password'),
            'foto' => 'default/empty-foto.png',
            'ttd' => 'default/empty-ttd.png'
        ]);

        // // TE
        // User::create([
        //     'name' => 'Galih Mustiko Aji, S.T., M.T.',
        //     'username' => 'galih',
        //     'email' => 'galih@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '198509172019031005',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // TL
        // User::create([
        //     'name' => 'Saepul Rahmat, S.Pd., M.T.',
        //     'username' => 'saepul',
        //     'email' => 'saepul@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '199207062019031014',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // PPM
        // User::create([
        //     'name' => 'Ganjar Ndaru Ikhtiagung, S.E., M.M.',
        //     'username' => 'ganjar',
        //     'email' => 'ganjar@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '198307282021211002',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // Bahasa
        // User::create([
        //     'name' => 'Betti Widianingsih, S.S., M.Hum.',
        //     'username' => 'betti',
        //     'email' => 'betti@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '05.16.8019',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // TM
        // User::create([
        //     'name' => 'Joko Setia Pribadi, S.T., M.Eng.',
        //     'username' => 'joko',
        //     'email' => 'joko@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '197703022021211008',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // P4MP
        // User::create([
        //     'name' => 'Bayu Aji Girawan, S.T., M.T.',
        //     'username' => 'bayu',
        //     'email' => 'bayu@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '197903252021211002',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // TI
        // User::create([
        //     'name' => 'Nur wahyu Rahadi, S.Kom., M.Eng.',
        //     'username' => 'wahyu',
        //     'email' => 'wahyu@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '198105092021211004',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // Perpustakaan
        // User::create([
        //     'name' => 'Cahya Vikasari, S.T., M.Eng',
        //     'username' => 'vika',
        //     'email' => 'vika@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '198412012018032001',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // TPPL
        // User::create([
        //     'name' => 'Taufan Ratri Harjanto, S.T., M.Eng.',
        //     'username' => 'taufan',
        //     'email' => 'taufan@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '04.17.8028',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // Keuangan
        // User::create([
        //     'name' => 'Faidzin Firdhaus, S.E., M.Ak.',
        //     'username' => 'faidzin',
        //     'email' => 'faidzin@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '197912062010121001',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // Umum
        // User::create([
        //     'name' => 'SitiMarkhatun, S.H.',
        //     'username' => 'siti',
        //     'email' => 'siti@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '196906111993032005',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // Pemeliharaan
        // User::create([
        //     'name' => 'Sugiwan',
        //     'username' => 'sugiwan',
        //     'email' => 'sugiwan@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '196906111993032005',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // Akademik
        // User::create([
        //     'name' => 'Dwi Novia Prasetyanti, S.Kom.M.Cs.',
        //     'username' => 'novi',
        //     'email' => 'novi@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '197911172021212009',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // TIK
        // User::create([
        //     'name' => 'Andriansyah Zakaria, M.Kom.',
        //     'username' => 'andriansyah',
        //     'email' => 'andriansyah@gmail.com',
        //     'level' => 'Auditee',
        //     'npak' => '198507252021211003',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // // DIREKTUR
        // User::create([
        //     'name' => 'Riyadi Purwanto, S.T., M.Eng.',
        //     'username' => 'riyadi',
        //     'email' => 'riyadi@gmail.com',
        //     'level' => 'Direktur',
        //     'npak' => '1786876798708790',
        //     'nohp' => '0819087756877',
        //     'password' => bcrypt('password'),
        //     'foto' => 'default/empty-foto.png',
        //     'ttd' => 'default/empty-ttd.png'
        // ]);

        // User::factory(10)->create();


    }
}
