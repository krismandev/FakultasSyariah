<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function galeri()
    {
        $galeris = Galeri::orderBy('created_at','desc')->paginate(16);
        return view('guest.galeri',compact(['galeris']));
    }
}
