<?php

namespace App\Http\Controllers\Dashboard;

use App\DosenProdi;
use App\Http\Controllers\Controller;
use App\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public $pesan_delete = ['success'=>'Berhasil Menghapus data'];
    public $pesan_create = ['success'=> 'Berhasil menambahkan data'];
    public $pesan_update = ['success' => 'Berhasil mengupdate data'];

    public function getProdi()
    {
        $prodis = Prodi::orderBy('id','asc')->get();
        return view('dashboard.prodi.prodi',compact(['prodis']));
    }

    public function editProdi($id)
    {
        $prodi = Prodi::find($id);
        $dosens = DosenProdi::where('prodi_id',$prodi->id)->get();
        return view('dashboard.prodi.editProdi',compact(['prodi','dosens']));
    }

    public function updateProdi(Request $request)
    {
        $prodi  = Prodi::find($request->prodi_id);
        $request->validate([
            'konten' => 'required'
        ]);

        $prodi->update([
            'konten' => $request->konten
        ]);

        return redirect()->route('getProdi')->with($this->pesan_update);
    }

    public function storeDosen(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'gambar' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'img/dosen';
            $file->move($tujuan_upload,$nama_file);
        }

        DosenProdi::create([
            'nama' => $request->nama,
            'prodi_id' => $request->prodi_id,
            'posisi' => $request->posisi,
            'gambar' => $nama_file
        ]);

        return back()->with($this->pesan_create);
    }

    public function deleteDosen($id)
    {
        $dosen = DosenProdi::find($id);
        $dosen->delete();
        return back()->with($this->pesan_delete);
    }
}
