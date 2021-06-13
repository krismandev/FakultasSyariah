<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Renstra;
use App\StrukturOrganisasi;
use App\Sejarah;
use App\SenatFakultas;
use App\VisiMisi;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

    public $pesan_delete = ['success'=>'Berhasil Menghapus data'];
    public $pesan_create = ['success'=> 'Berhasil menambahkan data'];
    public $pesan_update = ['success' => 'Berhasil mengupdate data'];

    public function getSejarah()
    {
        $sejarah = Sejarah::first();
        return view('dashboard.profil.sejarah',compact(['sejarah']));
    }

    public function storeSejarah(Request $request){
        $old_sejarah = Sejarah::first();
        $request->validate([
          'sejarah' => 'required',
        ]);
        if ($old_sejarah == null) {
          $sejarah = Sejarah::insertGetId([
            'sejarah' =>  $request->sejarah
          ]);
          return redirect()->back()->with($this->pesan_create);
        }else {
          $sejarah = [
            'sejarah' =>  $request->sejarah
          ];
          $old_sejarah->update($sejarah);
        }

        return redirect()->back()->with($this->pesan_update);
    }

    public function getVisiMisi()
    {
        $visimisi = VisiMisi::first();
        return view('dashboard.profil.visimisi',compact(['visimisi']));
    }

    public function storeVisiMisi(Request $request){
        $old_visi_misi = VisiMisi::first();
        $request->validate([
          'visi' => 'required',
          'misi' => 'required'
        ]);
        if ($old_visi_misi == null) {
          $visi_misi = VisiMisi::insertGetId([
            'visi' => $request->visi,
            'misi' => $request->misi
          ]);
          return redirect()->back()->with($this->pesan_create);
        }else {
          $visi_misi = [
            'visi' => $request->visi,
            'misi' => $request->misi
          ];
          $old_visi_misi->update($visi_misi);
        }

        return redirect()->back()->with($this->pesan_update);
    }

    public function getRenstra()
    {
        $renstra = Renstra::first();
        return view('dashboard.profil.renstra',compact(['renstra']));
    }

    public function storeRenstra(Request $request)
    {

        $request->validate([
            'file'=> 'file|mimes:pdf,docs,docx,doc',
            'konten' => 'required'
        ]);

        $old_renstra=Renstra::first();

        if ($old_renstra == null) {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'doc/renstra';
                $file->move($tujuan_upload,$nama_file);
            }else {
                $nama_file = null;
            }
            Renstra::create([
                'file' => $nama_file,
                'konten' => $request->konten
            ]);
            return back()->with($this->pesan_create);
        }else {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'doc/renstra';
                $file->move($tujuan_upload,$nama_file);
            }else {
                $nama_file = $old_renstra->file;
            }

            $old_renstra->update([
                'file' => $nama_file,
                'konten' => $request->konten
            ]);

            return redirect()->route('getRenstra')->with($this->pesan_update);
        }


    }

    public function getStruktur()
    {
        $struktur_organisasi = StrukturOrganisasi::first();
        return view('dashboard.profil.strukturorganisasi',compact(['struktur_organisasi']));
    }

    public function storeStruktur(Request $request){
        $old_struktur_organisasi = StrukturOrganisasi::first();
        $request->validate([
            // 'gambar' => 'image|mimes:png,jpg,jpeg',
            'konten' => 'required'
        ]);

        if ($old_struktur_organisasi == null) {

            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $nama_gambar = time()."_".$gambar->getClientOriginalName();
                $tujuan_upload = 'img/struktur';
                $gambar->move($tujuan_upload,$nama_gambar);
            }else {
                $nama_gambar = null;
            }

          $struktur_organisasi = StrukturOrganisasi::insertGetId([
            'gambar' => $nama_gambar,
            'konten' => $request->konten
          ]);
          return redirect()->back()->with($this->pesan_create);
        }else {
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $nama_gambar = time()."_".$gambar->getClientOriginalName();
                $tujuan_upload = 'img/struktur';
                $gambar->move($tujuan_upload,$nama_gambar);
            }else {
                $nama_gambar = $old_struktur_organisasi->gambar;
            }

          $struktur_organisasi = [
            'gambar' => $nama_gambar,
            'konten' => $request->konten
          ];
          $old_struktur_organisasi->update($struktur_organisasi);
          return redirect()->back()->with($this->pesan_update);
        }
    }


    public function getSenat()
    {
        $senat = SenatFakultas::first();
        return view('dashboard.profil.senatfakultas',compact(['senat']));
    }

    public function storeSenat(Request $request){
        $old_senat = SenatFakultas::first();
        $request->validate([
            'gambar' => 'image|mimes:png,jpg,jpeg',
            'konten' => 'required'
        ]);

        if ($old_senat == null) {

            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $nama_gambar = time()."_".$gambar->getClientOriginalName();
                $tujuan_upload = 'img/senat';
                $gambar->move($tujuan_upload,$nama_gambar);
            }else {
                $nama_gambar = null;
            }

          $senat = SenatFakultas::insertGetId([
            'gambar' => $nama_gambar,
            'konten' => $request->konten
          ]);
          return redirect()->back()->with($this->pesan_create);
        }else {
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $nama_gambar = time()."_".$gambar->getClientOriginalName();
                $tujuan_upload = 'img/senat';
                $gambar->move($tujuan_upload,$nama_gambar);
            }else {
                $nama_gambar = $old_senat->gambar;
            }

          $senat = [
            'gambar' => $nama_gambar,
            'konten' => $request->konten
          ];
          $old_senat->update($senat);
          return redirect()->back()->with($this->pesan_update);
        }
    }
}
