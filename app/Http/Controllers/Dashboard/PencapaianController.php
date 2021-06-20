<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Pencapaian;
use Illuminate\Http\Request;

class PencapaianController extends Controller
{
    public $pesan_delete = ['success'=>'Berhasil Menghapus data'];
    public $pesan_create = ['success'=> 'Berhasil menambahkan data'];
    public $pesan_update = ['success' => 'Berhasil mengupdate data'];


    public function getPencapaian()
    {
        $pencapaians = Pencapaian::orderBy('created_at','desc')->get();
        return view('dashboard.pencapaian',compact(['pencapaians']));
    }

    public function storePencapaian(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'gambar' => 'required|file|image|mimes:png,jpg,jpeg,gif',
        ]);

          $file = $request->file('gambar');
          $nama_file = time()."_".$file->getClientOriginalName();
          $tujuan_upload = 'img/pencapaian';
          $file->move($tujuan_upload,$nama_file);



          $pencapaian = Pencapaian::create([
            'judul' => $request->judul,
            'gambar' => $nama_file,
          ]);

          return redirect()->back()->with($this->pesan_create);
    }

    public function deletePencapaian($id)
    {
        $pencapaian = Pencapaian::find($id);
        $pencapaian->delete();
        return back()->with($this->pesan_delete);
    }
}
