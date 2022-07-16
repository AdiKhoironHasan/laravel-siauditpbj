<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Rencana;
use App\Models\Timeline;
use App\Models\Unit;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Desk;
use App\Models\KerjaDesk;
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
        // $this->call(Unitseeder::class);

        // Unit::factory(5)->create();

        // Barang::factory(20)->create();

        // Barang::create([
        //     'unit_id' => mt_rand(1, 2),
        //     'name' => $this->faker->colorName(),
        //     'no_kontrak' => $this->faker->numerify($this->faker->colorName() . '-#####'),
        //     'tgl_kontrak' => $this->faker->date(),
        //     'nilai_kontrak' => $this->faker->randomNumber(6, true),
        //     'tahun_anggaran' => $this->faker->year(),
        // ]);

        Rencana::create([
            'auditor1_id' => 2,
            'auditor2_id' => 3,
            'auditor3_id' => 4,
            'auditee_id' => 5,
            'status' => 'Belum Terlaksana',
            'tahun' => 2020,
            'tanggal' => '2020-03-13'
        ]);

        Timeline::create([
            'rencana_id' => 1,
            'kerja_desk_id' => 1,
            // 'desk_id' => 1,
            // 'visit_id' => 1
        ]);


        KerjaDesk::create([
            "rencana_id" => 1,
            "unit_kerja" => "Dolores enim eveniet",
            "tahun" => 2022,
            "nama_paket" => "Et commodo deleniti",
            "no_kontrak" => "Est sed consequatur",
            "nilai_kontrak" => "Cupidatat do proiden",
            "tanggal_kontrak" => "2022-08-02",
            "nama_penyedia" => "In consequatur volu",
            "nilai_hps" => "Aut perferendis volu",
            "nilai_penawaran" => "Nobis facere quisqua",
            "metode_penilaian" => "Incidunt sint quide",
            "metode_pemilihan" => "Quaerat error accusa",
            "metode_penyampaian" => "Sit veritatis volupt",
            "metode_evaluasi" => "Omnis aliquid qui ne",
            "jaminan_pelaksanaan" => "Eum rerum aliquip om",
            "masa_kontrak_1" => "1989-07-27",
            "masa_kontrak_2" => "1971-07-16",
            "masa_jaminan_1" => "1993-02-26",
            "masa_jaminan_2" => "1985-12-23",
            "tanggal_sp2d" => "1982-02-14",
            "no_adendum" => "Minima enim nostrud",
            "tanggal_sppbj" => "1979-09-15",
            "substansi_kontrak_1" => 1,
            "substansi_kontrak_2" => 1,
            "substansi_kontrak_3" => 1,
            "substansi_kontrak_4" => 1,
            "substansi_kontrak_5" => 1,
            "substansi_kontrak_5_1" => 1,
            "substansi_kontrak_6" => 1,
            "substansi_kontrak_6_1" => 1,
            "substansi_kontrak_6_1_1" => 1,
            "substansi_kontrak_6_1_2" => 1,
            "substansi_kontrak_6_1_3" => 1,
            "substansi_kontrak_6_1_4" => 1,
            "substansi_kontrak_6_1_5" => 1,
            "substansi_kontrak_6_1_6" => 1,
            "substansi_kontrak_6_1_7" => 1,
            "tanggal_surat" => "1989-07-27",
            "durasi_penerimaan" => 20,
            "tanggal_disetujui" => "1989-07-27",
            "surat_pesanan_1" => 1,
            "surat_pesanan_2" => 1,
            "penyusunan_program_mutu_1" => 1,
            "penyusunan_program_mutu_2" => 1,
            "penyusunan_program_mutu_3" => 1,
            "penyusunan_program_mutu_4" => 1,
            "penyusunan_program_mutu_5" => 1,
            "penyusunan_program_mutu_6" => 1,
            "penyusunan_program_mutu_7" => 1,
            "pemeriksaan_bersama_1" => 1,
            "pemeriksaan_bersama_2" => 1,
            "pemeriksaan_bersama_2_1" => 1,
            "uang_muka" => "Non amet veniam op",
            "jaminan_uang_muka" => "Quas illo provident",
            "penerbit_jaminan_uang_muka" => "Perusahaan Asuransi",
            "kriteria" => "Usaha Kecil",
            "keterangan_jaminan_uang_muka" => "Sesuai",
            "nama_bank_penerbit" => "Accusamus excepteur",
            "pembayaran_uang_muka_1" => 1,
            "pembayaran_uang_muka_2" => 1,
            "perubahan_kegiatan_1" => 1,
            "perubahan_kegiatan_1_1" => 1,
            "perubahan_kegiatan_1_2" => 1,
            "perubahan_kegiatan_1_3" => 1,
            "perubahan_kegiatan_1_4" => 1,
            "asuransi_1" => 1,
            "asuransi_2" => 1,
            "pengiriman_1" => 1,
            "pengiriman_2" => 1,
            "pengiriman_3" => 1,
            "pengiriman_4" => 1,
            "pengiriman_4_1" => 1,
            "uji_coba_barang_1" => 1,
            "uji_coba_barang_1_1" => 1,
            "uji_coba_barang_1_2" => 1,
            "uji_coba_barang_2" => 1,
            "uji_coba_barang_2_1" => 1,
            "uji_coba_barang_2_2" => 1,
            "uji_coba_barang_3" => 1,
            "uji_coba_barang_3_1" => 1,
            "uji_coba_barang_3_2" => 1,
            "serah_terima_barang_1" => 1,
            "serah_terima_barang_1_1" => 1,
            "serah_terima_barang_2" => 1,
            "serah_terima_barang_2_1" => 1,
            "serah_terima_barang_3" => 1,
            "pembayaran_1" => 1,
            "pembayaran_3" => 1,
            "pembayaran_3_1" => 1,
            "denda_1" => 1,
            "denda_1_1" => 1,
            "penyesuaian_harga_1" => 1,
            "penyesuaian_harga_1_1" => 1,
            "perpanjangan_waktu_1" => 1,
            "perpanjangan_waktu_1_1" => 1,
            "laporan_hasil_1" => 1,
            "laporan_hasil_2" => 1,
        ]);

        // Desk::create([
        //     'rencana_id' => 1,
        //     'tipe_monitoring' => 'sesuai',
        //     'masa_monitoring_awal' => '2022-01-04',
        //     'masa_monitoring_akhir' => '2022-02-01',
        //     'tanggal_monitoring' => '2022-01-20',
        //     'kontrak_1' => 'sesuai',
        //     'kontrak_2' => 'sesuai',
        //     'kontrak_3' => 'sesuai',
        //     'kontrak_4' => 'sesuai',
        //     'surat_pesanan_1' => 'sesuai',
        //     'surat_pesanan_2' => 'sesuai',
        //     'surat_pesanan_3' => 'sesuai',
        //     'surat_pesanan_4' => 'sesuai',
        //     'penyusunan_program_mutu' => 'sesuai',
        //     'pemeriksaan_bersama' => 'sesuai',
        //     'pembayaran_uang_muka_1' => 'sesuai',
        //     'pembayaran_uang_muka_2' => 'sesuai',
        //     'uji_coba_barang' => 'sesuai',
        //     'serah_terima_barang_1' => 'sesuai',
        //     'serah_terima_barang_2' => 'sesuai',
        //     'catatan' => 'sesuai',
        //     'kriteria' => 'sesuai',
        //     'akar_penyebab' => 'sesuai',
        //     'akibat' => 'sesuai',
        //     'rekomendasi' => 'sesuai',
        //     'tanggapan_auditee' => 'sesuai',
        //     'rencana_perbaikan' => 'sesuai',
        // ]);

        // Visit::create([
        //     'desk_id' => 1,
        //     'tipe_monitoring' => 'sesuai',
        //     'masa_monitoring_awal' => '2022-05-04',
        //     'masa_monitoring_akhir' => '2022-06-04',
        //     'tanggal_monitoring' => '2022-05-10',
        //     'penyusunan_mutu_1' => 'sesuai',
        //     'penyusunan_mutu_2' => 'sesuai',
        //     'pemeriksaan_1' => 'sesuai',
        //     'pemeriksaan_2' => 'sesuai',
        //     'perubahan_kegiatan' => 'sesuai',
        //     'asuransi_1' => 'sesuai',
        //     'asuransi_2' => 'sesuai',
        //     'pengiriman' => 'sesuai',
        //     'uji_coba' => 'sesuai',
        //     'serah_terima' => 'sesuai',
        //     'denda' => 'sesuai',
        //     'perpanjangan' => 'sesuai',
        //     'laporan' => 'sesuai',
        //     'catatan' => 'sesuai',
        //     'kriteria' => 'sesuai',
        //     'akar_penyebab' => 'sesuai',
        //     'akibat' => 'sesuai',
        //     'rekomendasi' => 'sesuai',
        //     'tanggapan_auditee' => 'sesuai',
        //     'rencana_perbaikan' => 'sesuai'
        // ]);
    }
}


// $table->integer('barang_id');
// $table->string('name');
// $table->string('no_kontrak');
// $table->date('tanggal_kontrak');
// $table->integer('nilai_kontrak');
// $table->year('tahun');
// $table->timestamps();
