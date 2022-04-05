<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function print($id){
        $berita = Berita::where('id',$id)->firstOrFail();
        return view('berita.print', [
            'title' => 'Berita Acara',
            'berita' => $berita
        ]);
    }
}
