<?php

namespace App\Http\Controllers;

use App\AkreditasiInstitusi;
use App\AkreditasiProdi;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function akreditasi()
    {
        $akreditasis = AkreditasiInstitusi::orderBy('created_at','desc')->get();
        $akr_prodis = AkreditasiProdi::orderBy('created_at','desc')->get();
        return view('guest.akademik.akreditasi',compact(['akreditasis','akr_prodis']));
    }
}
