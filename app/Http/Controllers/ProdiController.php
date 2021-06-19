<?php

namespace App\Http\Controllers;

use App\DosenProdi;
use App\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function singleProdi($id)
    {
        $prodi = Prodi::find($id);
        $dosens = DosenProdi::where('prodi_id',$id)->get();
        return view('guest.prodi.singleProdi',compact(['prodi','dosens']));
    }
}
