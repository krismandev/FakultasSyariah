<?php

namespace App\Http\Controllers;

use App\AkreditasiInstitusi;
use App\AkreditasiProdi;
use App\KalenderWisuda;
use App\PanduanAkademik;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function akreditasi()
    {
        $akreditasis = AkreditasiInstitusi::orderBy('created_at','desc')->get();
        $akr_prodis = AkreditasiProdi::orderBy('created_at','desc')->get();
        return view('guest.akademik.akreditasi',compact(['akreditasis','akr_prodis']));
    }

    public function panduan()
    {
        $panduans = PanduanAkademik::orderBy('created_at','desc')->paginate(10);
        return view('guest.akademik.panduan',compact(['panduans']));
    }

    public function kalenderWisuda()
    {
        $kalenders = KalenderWisuda::orderBy('created_at','desc')->paginate(10);
        return view('guest.akademik.kalenderWisuda',compact(['kalenders']));
    }
}
