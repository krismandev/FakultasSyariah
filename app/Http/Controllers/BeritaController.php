<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        $beritas = Berita::orderBy('created_at','desc')->paginate(10);
        $berita_lainnya = Berita::inRandomOrder()->paginate(5);
        return view('guest.berita.berita',compact(['beritas','berita_lainnya']));
    }
}
