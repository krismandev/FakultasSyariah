<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public $pesan_delete = ['success'=>'Berhasil Menghapus data'];
    public $pesan_create = ['success'=> 'Berhasil menambahkan data'];
    public $pesan_update = ['success' => 'Berhasil mengupdate data'];

    public function getLaporan()
    {
        $laporans = Laporan::orderBy('created_at','desc')->get();
        return view('dashboard.laporan',compact(['laporans']));
    }

    public function storeLaporan(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|file|mimes:pdf'
        ]);

        if ($request->hasFile('file')) {
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'doc/laporan';
        $file->move($tujuan_upload,$nama_file);
        }else {
            $nama_file = null;
        }

        Laporan::create([
            'judul' => $request->judul,
            'file' => $nama_file
        ]);


        return back()->with($this->pesan_create);
    }

    public function deleteAkreditasi($id)
    {
        $laporan = Laporan::find($id);
        $laporan->delete();
        return back()->with($this->pesan_delete);
    }
}
