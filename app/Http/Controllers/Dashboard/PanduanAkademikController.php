<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\PanduanAkademik;
use Illuminate\Http\Request;

class PanduanAkademikController extends Controller
{

    public $pesan_delete = ['success'=>'Berhasil Menghapus data'];
    public $pesan_create = ['success'=> 'Berhasil menambahkan data'];
    public $pesan_update = ['success' => 'Berhasil mengupdate data'];

    public function getPanduan()
    {
        $panduans = PanduanAkademik::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.akademik.panduanakademik',compact(['panduans']));
    }

    public function storePanduan(Request $request)
    {
        // dd("ok");
        $request->validate([
            'judul_panduan' => 'required',
            'nomor' => 'required',
            'file' => 'file|mimes:pdf'
        ]);

        if ($request->hasFile('file')) {
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'doc/panduan';
        $file->move($tujuan_upload,$nama_file);
        }else {
            $nama_file = null;
        }

        PanduanAkademik::create([
            'judul_panduan' => $request->judul_panduan,
            'nomor' => $request->nomor,
            'file' => $nama_file
        ]);


        return back()->with($this->pesan_create);
    }

    public function deletePanduan($id)
    {
        $panduan = PanduanAkademik::find($id);
        $panduan->delete();
        return back()->with($this->pesan_delete);
    }

}
