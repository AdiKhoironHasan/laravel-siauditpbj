<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Rencana;
use App\Models\Timeline;
use App\Models\Unit;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Desk;
use App\Models\Visit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Userseeder::class);
        $this->call(Unitseeder::class);

        // Unit::factory(5)->create();

        Barang::factory(5)->create();

        Rencana::create([
            'barang_id' => 1,
            'auditor1_id' => 1,
            'auditor2_id' => 2,
            'auditor3_id' => 3,
            'status' => 'Belum Terlaksana',
            'tahun' => 2020,
            'tanggal' => '2020-03-13'
        ]);

        Desk::create([
            'rencana_id' => 1,
            'tipe_monitoring' => 'sesuai',
            'masa_monitoring_awal' => '2022-01-04',
            'masa_monitoring_akhir' => '2022-02-01',
            'tanggal_monitoring' => '2022-01-20',
            'kontrak_1' => 'sesuai',
            'kontrak_2' => 'sesuai',
            'kontrak_3' => 'sesuai',
            'kontrak_4' => 'sesuai',
            'surat_pesanan_1' => 'sesuai',
            'surat_pesanan_2' => 'sesuai',
            'surat_pesanan_3' => 'sesuai',
            'surat_pesanan_4' => 'sesuai',
            'penyusunan_program_mutu' => 'sesuai',
            'pemeriksaan_bersama' => 'sesuai',
            'pembayaran_uang_muka_1' => 'sesuai',
            'pembayaran_uang_muka_2' => 'sesuai',
            'uji_coba_barang' => 'sesuai',
            'serah_terima_barang_1' => 'sesuai',
            'serah_terima_barang_2' => 'sesuai',
            'catatan' => 'sesuai',
            'kriteria' => 'sesuai',
            'akar_penyebab' => 'sesuai',
            'akibat' => 'sesuai',
            'rekomendasi' => 'sesuai',
            'tanggapan_auditee' => 'sesuai',
            'rencana_perbaikan' => 'sesuai',
        ]);

        Visit::create([
            'desk_id' => 1,
            'tipe_monitoring' => 'sesuai',
            'masa_monitoring_awal' => '2022-05-04',
            'masa_monitoring_akhir' => '2022-06-04',
            'tanggal_monitoring' => '2022-05-10',
            'penyusunan_mutu_1' => 'sesuai',
            'penyusunan_mutu_2' => 'sesuai',
            'pemeriksaan_1' => 'sesuai',
            'pemeriksaan_2' => 'sesuai',
            'perubahan_kegiatan' => 'sesuai',
            'asuransi_1' => 'sesuai',
            'asuransi_2' => 'sesuai',
            'pengiriman' => 'sesuai',
            'uji_coba' => 'sesuai',
            'serah_terima' => 'sesuai',
            'denda' => 'sesuai',
            'perpanjangan' => 'sesuai',
            'laporan' => 'sesuai',
            'catatan' => 'sesuai',
            'kriteria' => 'sesuai',
            'akar_penyebab' => 'sesuai',
            'akibat' => 'sesuai',
            'rekomendasi' => 'sesuai',
            'tanggapan_auditee' => 'sesuai',
            'rencana_perbaikan' => 'sesuai'
        ]);

        Timeline::create([
            'rencana_id' => 1,
            'desk_id' => 1,
            'visit_id' => 1
        ]);
    }
}


// $table->integer('barang_id');
// $table->string('name');
// $table->string('no_kontrak');
// $table->date('tanggal_kontrak');
// $table->integer('nilai_kontrak');
// $table->year('tahun');
// $table->timestamps();
