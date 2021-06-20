<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Berita;
use App\Prodi;
use App\Galeri;
use App\Pencapaian;
use App\PimpinanFakultas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::inRandomOrder()->get();
        $beritas = Berita::orderBy('created_at','desc')->paginate(3);
        $prodis = Prodi::orderBy('id','asc')->get();
        $galeris = Galeri::paginate(3);
        $pimpinans = PimpinanFakultas::orderBy('posisi','asc')->get();
        $pencapaians = Pencapaian::orderBy('created_at','desc')->paginate(3);
        return view('guest.index',compact(['banners','beritas','prodis','galeris','pimpinans','pencapaians']));
    }
}
