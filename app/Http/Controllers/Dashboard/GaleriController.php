<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public $pesan_delete = ['success'=>'Berhasil Menghapus data'];
    public $pesan_create = ['success'=> 'Berhasil menambahkan data'];
    public $pesan_update = ['success' => 'Berhasil mengupdate data'];

    public function getGaleri()
    {
        $galeris = Galeri::orderBy('created_at','desc')->paginate(15);
        return view('dashboard.galeri',compact(['galeris']));
    }

    public function storeGaleri(Request $request){

        $this->validate($request,[
          'gambar' => 'required|file|image|mimes:png,jpg,jpeg,gif',
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'img/galeri';
        $file->move($tujuan_upload,$nama_file);



        $galeri = Galeri::create([
          'gambar' => $nama_file,
        ]);

        return redirect()->back()->with($this->pesan_create);
      }

    public function deleteGaleri($id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();
        return back()->with($this->pesan_delete);
    }
}
