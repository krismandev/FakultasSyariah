@extends('layouts.guest.master')
@section('title','Berita')
@section('content')

    <!-- ====== Page Header ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Berita</h2>

                </div>
            </div>
        </div>
    </div>

    <!-- ====== Breadcrumbs Area ====== -->
    <div class="breadcrumbs-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Beranda</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Berita</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== Blog Area ====== -->
    <div class="blog-area bg-gray-color">
       <div class="container">
           <div class="row">
                <div class="col-md-8">
                   <div class="blog-content-left">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row">
                                    @if ($beritas != null)
                                    @foreach ($beritas as $berita)
                                    <div class="col-md-6 col-sm-6">
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
                                    </div><!-- /.col-md-6 -->
                                    @endforeach
                                    @endif

                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pagination-link">
                                            <ul class="pagination">
                                                {{$beritas->links()}}
                                            </ul>
                                        </div><!-- /.pagination -->
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div> <!-- /.home -->
                        </div> <!-- /.tab-content -->
                   </div><!-- /.blog-content-left -->
                </div><!-- /.col-md-8 -->

                <div class="col-md-4">
                    <div class="blog-content-right">
                        <div class="widget widget_popular_posts clearfix">
                            <div class="widget-title-area">
                                <h4 class="widget-title">Berita Lainnya</h4><!-- /.widget-title -->
                            </div><!-- /.widget-title-area -->

                            <div class="widget-content">
                                @foreach ($berita_lainnya as $berita)
                                <div class="post-content clearfix">
                                    <div class="image-content">
                                        <a href="#">
                                            <img src="{{url('img/berita/'.$berita->gambar)}}" alt="post" style="width: 107px; height: 71px;"/>
                                        </a>
                                    </div><!-- /.image-content -->
                                    <div class="post-title">
                                        <h5><a href="#">{!!Str::limit($berita->judul,150)!!}</a></h5>
                                        <span>{{date('d M Y',strtotime($berita->created_at))}}</span>
                                    </div><!-- /.post-title -->
                                </div><!-- /.post-content -->
                                @endforeach
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget widget_popular_post -->
                    </div><!-- /.blog-content-right -->
               </div><!-- /.col-md-4 -->
           </div><!-- /.row -->
       </div><!-- /.container -->
    </div><!-- /.blog-area -->

@endsection

