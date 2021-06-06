<?php

namespace App\Http\Controllers\Dashboard;

use App\AkreditasiInstitusi;
use App\AkreditasiProdi;
use App\Prodi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkreditasiController extends Controller
{
    public function getAkreditasi()
    {
        $akreditasis = AkreditasiInstitusi::orderBy('created_at','desc')->get();
        return view('dashboard.akademik.akreditasi-institusi',compact(['akreditasis']));
    }

    public function storeAkreditasi(Request $request)
    {
        // dd("ok");
        $request->validate([
            'nama_akreditasi' => 'required',
            'nomor' => 'required',
            'file' => 'file|mimes:pdf'
        ]);

        if ($request->hasFile('file')) {
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'doc/akreditasi';
        $file->move($tujuan_upload,$nama_file);
        }else {
            $nama_file = null;
        }

        AkreditasiInstitusi::create([
            'nama_akreditasi' => $request->nama_akreditasi,
            'nomor' => $request->nomor,
            'file' => $nama_file
        ]);


        return back()->with('success','Berhasil menambah data akreditasi');
    }

    public function deleteAkreditasi($id)
    {
        $akreditasi = AkreditasiInstitusi::find($id);
        $akreditasi->delete();
        return back()->with('success','Berhasil menghapus data');
    }

    public function getAkrProdi()
    {
        $prodis = Prodi::all();
        $akr_prodis = AkreditasiProdi::orderBy('created_at','desc')->get();
        return view('dashboard.akademik.akreditasi-prodi',compact(['akr_prodis','prodis']));
    }

    public function storeAkrProdi(Request $request)
    {
        $request->validate([
            'prodi_id' => 'required',
            'strata' => 'required',
            'peringkat' => 'required',
            'nomor_sk' => 'required',
            'sertifikat' => 'file|mimes:pdf'
        ]);

        if ($request->hasFile('sertifikat')) {
        $sertifikat = $request->file('sertifikat');
        $nama_sertifikat = time()."_".$sertifikat->getClientOriginalName();
        $tujuan_upload = 'doc/akreditasi';
        $sertifikat->move($tujuan_upload,$nama_sertifikat);
        }else {
            $nama_sertifikat = null;
        }

        AkreditasiProdi::create([
            'prodi_id' => $request->prodi_id,
            'nomor_sk' => $request->nomor_sk,
            'strata' => $request->strata,
            'peringkat' => $request->peringkat,
            'sertifikat' => $nama_sertifikat
        ]);


        return back()->with('success','Berhasil menambah data akreditasi');
    }

    public function deleteAkrProdi($id)
    {
        $akreditasi = AkreditasiProdi::find($id);
        $akreditasi->delete();
        return back()->with('success','Berhasil menghapus data');
    }
}
