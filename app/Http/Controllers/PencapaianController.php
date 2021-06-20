<?php

namespace App\Http\Controllers;

use App\Pencapaian;
use Illuminate\Http\Request;

class PencapaianController extends Controller
{
    public function pencapaian()
    {
        $pencapaians = Pencapaian::orderBy('created_at','desc')->paginate(15);
        return view('guest.pencapaian',compact(['pencapaians']));
    }
}
