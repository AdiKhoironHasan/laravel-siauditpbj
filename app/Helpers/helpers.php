<?php

// function tanggal($tanggal)
// {
//     // membuat sebuah variabel dengan nama bulanIndo dimana akan memuat array dari nama-nama bulan Indonesia mulai dari Januari sampai Desember
//     $bulanIndo = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

//     // membuat variabel dengan nama tahun dimana mengambil empet digit pertama dari format Date yaitu tahun
//     $tahun = substr($tanggal, 0, 4);

//     // membuat variabel dengan nama bulan dimana mengambil dua digit mulai dari digit ke lima dari format Date yaitu bulan
//     $bulan = substr($tanggal, 5, 2);

//     // membuat variabel dengan nama tgl dimana mengambil dua digit mulai dari digit ke delapan dari format Date yaitu tanggal
//     $tgl = substr($tanggal, 8, 2);

//     // membuat variabel result dimana variabel ini membentuk format untuk tanggal Indonesia
//     $result = $tgl . ' ' . $bulanIndo[(int) $bulan - 1] . ' ' . $tahun;
//     return $result;
// }
