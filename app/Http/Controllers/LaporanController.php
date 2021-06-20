<?php

namespace App\Http\Controllers;

use App\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporan()
    {
        $laporans = Laporan::orderBy('created_at','desc')->paginate(10);
        return view('guest.laporan',compact(['laporans']));
    }
}
