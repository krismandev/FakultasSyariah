<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\KalenderWisuda;
use Illuminate\Http\Request;

class KalenderWisudaController extends Controller
{
    public function getKalenderWisuda()
    {
        $kalenders = KalenderWisuda::orderBy('created_at','desc')->get();
        return view('dashboard.akademik.kalender-wisuda',compact(['kalenders']));
    }

    public function storeKalenderWisuda(Request $request)
    {
        $request->validate([
            'agenda' => 'required',
            'tanggal_pelaksanaan' => 'required'
        ]);

        KalenderWisuda::create([
            'agenda' => $request->agenda,
            'tanggal_pelaksanaan' => date('Y-m-d',strtotime($request->tanggal_pelaksanaan)),
        ]);

        return back()->with('success','Berhasil menambah agenda');

    }

    public function deleteKalenderWisuda($id)
    {
        $kalender = KalenderWisuda::find($id);
        $kalender->delete();
        return back()->with('success','Berhasil Menghapus');
    }
}
