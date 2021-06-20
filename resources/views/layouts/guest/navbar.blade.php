<!-- ====== Header Bottom Content ====== -->
@php
    use App\Prodi;
    $prodis = Prodi::orderBy('id','asc')->get();
@endphp
<header class="header-bottom-content bg-nero hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <nav id="main-nav" class="site-navigation top-navigation">
                    <div class="menu-wrapper">
                        <div class="menu-content">
                            <ul class="menu-list">
                                <li class="active">
                                    <a href="{{route('index')}}" class="{{(request()->is('/')) ? 'active' : ''}}">Beranda</a>
                                </li>
                                <li>
                                    <a href="#" class="{{(request()->is('visi-misi') || request()->is('sejarah*') || request()->is('struktur-organisasi') || request()->is('renstra') || request()->is('senat-fakultas') ) ? 'active' : ''}}">Profile</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{route('sejarah')}}">Sejarah</a>
                                        </li>
                                        <li>
                                            <a href="{{route('visimisi')}}">Visi & Misi</a>
                                        </li>
                                        <li>
                                            <a href="{{route('struktur')}}">Struktur Organisasi</a>
                                        </li>
                                        <li>
                                            <a href="{{route('renstra')}}">Rencana Strategis</a>
                                        </li>
                                        <li>
                                            <a href="{{route('senat')}}">Senat Fakultas</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="{{(request()->is('akademik*')) ? 'active' : ''}}">Akademik</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{route('akreditasi')}}">Akreditasi</a>
                                        </li>
                                        <li>
                                            <a href="{{route('panduan')}}">Panduan Akademik</a>
                                        </li>
                                        <li>
                                            <a href="{{route('kalenderWisuda')}}">Kalender Wisuda</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="{{(request()->is('prodi*')) ? 'active' : ''}}">Prodi</a>
                                    <ul class="sub-menu">
                                        @foreach ($prodis as $prodi)

                                        <li>
                                            <a href="{{route('singleProdi',['id'=>$prodi->id,'slug'=>Str::slug($prodi->nama_prodi)])}}">{{$prodi->nama_prodi}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="{{(request()->is('laporan*') || request()->is('pencapaian*')) ? 'active' : ''}}">Laporan</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{route('laporan')}}">Laporan</a>
                                        </li>
                                        <li>
                                            <a href="{{route('pencapaian')}}">Pencapaian</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('berita')}}" class="{{(request()->is('berita*')) ? 'active' : ''}}">Berita</a>
                                </li>
                                <li>
                                    <a href="{{route('galeri')}}" class="{{(request()->is('galeri*')) ? 'active' : ''}}">Galeri</a>
                                </li>
                                {{-- <li>
                                    <a href="#" class="{{(request()->is('kontak*')) ? 'active' : ''}}">Contact</a>
                                </li> --}}
                            </ul> <!-- /.menu-list -->
                        </div> <!-- /.menu-content-->
                    </div> <!-- /.menu-wrapper -->
                </nav><!-- /.site-navigation -->
            </div><!-- /.col-md-10 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.header-bottom-content -->
