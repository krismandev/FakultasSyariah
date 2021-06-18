<?php

namespace App\Http\Controllers;

use App\Renstra;
use App\Sejarah;
use App\SenatFakultas;
use App\StrukturOrganisasi;
use App\VisiMisi;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function sejarah()
    {
        $sejarah = Sejarah::first();
        return view('guest.profil.sejarah',compact(['sejarah']));
    }

    public function visimisi()
    {
        $visimisi = VisiMisi::first();
        return view('guest.profil.visimisi',compact(['visimisi']));
    }

    public function struktur()
    {
        $struktur = StrukturOrganisasi::first();
        return view('guest.profil.struktur',compact(['struktur']));
    }

    public function renstra()
    {
        $renstra = Renstra::first();
        return view('guest.profil.renstra',compact(['renstra']));
    }

    public function senat()
    {
        $senat = SenatFakultas::first();
        return view('guest.profil.senat',compact(['senat']));
    }


}
