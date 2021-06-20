<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\PimpinanFakultas;
use Illuminate\Http\Request;

class PimpinanFakultasController extends Controller
{
    public $pesan_delete = ['success'=>'Berhasil Menghapus data'];
    public $pesan_create = ['success'=> 'Berhasil menambahkan data'];
    public $pesan_update = ['success' => 'Berhasil mengupdate data'];

    public function getPimpinan()
    {
        $pimpinans = PimpinanFakultas::orderBy('posisi','desc')->get();
        return view('dashboard.pimpinanfakultas',compact(['pimpinans']));
    }

    public function storePimpinan(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'posisi' => 'required',
            'gambar' => 'required|file|image|mimes:png,jpg,jpeg,gif',
        ]);

          $file = $request->file('gambar');
          $nama_file = time()."_".$file->getClientOriginalName();
          $tujuan_upload = 'img/pimpinan';
          $file->move($tujuan_upload,$nama_file);



          $pimpinan = PimpinanFakultas::create([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'gambar' => $nama_file,
          ]);

          return redirect()->back()->with($this->pesan_create);
    }

    public function deletePimpinan($id)
    {
        $pimpinan = PimpinanFakultas::find($id);
        $pimpinan->delete();
        return back()->with($this->pesan_delete);
    }
}


