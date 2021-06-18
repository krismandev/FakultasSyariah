@extends('layouts.guest.master')
@section('title',$berita->judul)
@section('content')

<!-- ====== Breadcrumbs Area ====== -->
<div class="breadcrumbs-area bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <span class="first-item">
                     <a href="{{route('index')}}">Beranda</a></span>
                    <span class="separator">&gt;</span>
                    <span class="first-item">
                        <a href="{{route('berita')}}">
                            Berita
                        </a>
                    </span>
                    <span class="separator">&gt;</span>
                    <span class="last-item">{{$berita->judul}}</span>

                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->

<div class="single-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-main-content">
                    <article class="post">
                        <div class="entry-header">
                            <h2 class="entry-title">{{$berita->judul}}</h2>
                        </div><!-- /.entry-header -->

                        <figure class="post-thumb">
                            <img src="{{url('img/berita/'.$berita->gambar)}}" alt="blog" />
                        </figure><!-- /.post-thumb -->

                        <div class="entry-content">
                            <p>{!!$berita->konten!!}</p>
                        </div><!-- /.entry-content -->

                    </article><!-- /.post -->
                </div><!-- /.single-main-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.single-content -->

<!-- ====== Related Area ====== -->
<div class="ralated-area bg-gray-color">
    <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="ralated-heading text-center">
                     <h2>Berita Lainnya</h2>
                 </div><!-- /.blog-heading -->
             </div><!-- /.col-md-12 -->
         </div><!-- /.row -->
        <div class="row">
            @foreach ($beritas as $berita)
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <a href="{{route('singleBerita',['id'=>$berita->id,'slug'=>$berita->slug])}}">
                                <img src="{{url('img/berita/'.$berita->gambar)}}" alt="blog" style="width: 360px; height: 232px; object-fit: cover; object-position: center;"/>
                            </a>
                        </figure><!-- /.post-thumb -->
                        <div class="post-content">
                            <div class="entry-meta">
                                <span class="entry-date">
                                    {{date('d M Y',strtotime($berita->created_at))}}
                                </span>
                                <span class="devied"></span>
                                <span class="entry-category">
                                    <a href="#">Rooms &amp; suites</a>
                                </span>
                            </div><!-- /.entry-header -->
                            <div class="entry-header">
                                <h3><a href="{{route('singleBerita',['id'=>$berita->id,'slug'=>$berita->slug])}}">{{$berita->judul}}</a></h3>
                            </div><!-- /.entry-header -->
                        </div><!-- /.post-content -->
                    </article><!-- /.post -->
                </div><!-- /.col-md-4 -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
 </div><!-- /.ralated-area -->


@endsection
