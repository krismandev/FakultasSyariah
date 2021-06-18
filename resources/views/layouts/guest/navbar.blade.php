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
                                <li>
                                    <a href="{{route('index')}}">Beranda</a>
                                </li>
                                <li>
                                    <a href="{{route('galeri')}}">Galeri</a>
                                </li>
                                <li>
                                    <a href="#">Profile</a>
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
                                    <a href="#">Akademik</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{route('akreditasi')}}">Akreditasi</a>
                                        </li>
                                        <li>
                                            <a href="comming.html">Panduan Akademik</a>
                                        </li>
                                        <li>
                                            <a href="404.html">Kalender Wisuda</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('berita')}}">Berita</a>
                                </li>
                                <li>
                                    <a href="#">Prodi</a>
                                    <ul class="sub-menu">
                                        @foreach ($prodis as $prodi)

                                        <li>
                                            <a href="blog.html">{{$prodi->nama_prodi}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul> <!-- /.menu-list -->
                        </div> <!-- /.menu-content-->
                    </div> <!-- /.menu-wrapper -->
                </nav><!-- /.site-navigation -->
            </div><!-- /.col-md-10 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.header-bottom-content -->
