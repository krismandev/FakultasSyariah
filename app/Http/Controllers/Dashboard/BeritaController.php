<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Berita;
use Str;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function getBerita()
    {
        $beritas = Berita::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.berita.index',compact(['beritas']));
    }

    public function createBerita()
    {
        return view('dashboard.berita.create');
    }

    public function storeBerita(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' =>'required|image|mimes:png,jpg',
            // file|image|mimes:png,jpg,jpeg,gif|max:10000'
            'konten' => 'required',
          ]);

          if ($request->hasFile('gambar')) {
            $gambar_berita = $request->file('gambar');
            $nama_gambar_berita = time()."_".$gambar_berita->getClientOriginalName();
            $tujuan_upload = 'img/berita';
            $gambar_berita->move($tujuan_upload,$nama_gambar_berita);
          }

            $berita = Berita::create([
              'judul' => $request->judul,
              'slug' => Str::slug($request->judul),
              'user_id' => auth()->user()->id,
              'konten' => $request->konten,
              'gambar' => $nama_gambar_berita,
            ]);


        //   dd("ok");
        //   Alert::success('success','Berhasil memposting berita');
          return redirect()->route('getBerita')->with('success','Berhasil menambah berita');
    }

    public function editBerita($id)
    {
        $berita = Berita::find($id);
        return view('dashboard.berita.edit',compact(['berita']));
    }

    public function updateBerita(Request $request)
    {
        // dd("ok");
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $berita = Berita::find($request->berita_id);

        if ($request->hasFile('gambar')) {
        $gambar_berita = $request->file('gambar');
        $nama_gambar_berita = time()."_".$gambar_berita->getClientOriginalName();
        $tujuan_upload = 'img/berita';
        $gambar_berita->move($tujuan_upload,$nama_gambar_berita);
        }else {
            $nama_gambar_berita = $berita->gambar;
        }

        $berita->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'user_id' => auth()->user()->id,
            'konten' => $request->konten,
            'gambar' => $nama_gambar_berita,
        ]);


        return back()->with('success','Berhasil mengupdate berita');
    }

    public function deleteBerita($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return back()->with('success','Berhasil menghapus berita');
    }
}
