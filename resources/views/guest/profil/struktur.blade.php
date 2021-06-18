@extends('layouts.guest.master')
@section('title','Struktur Organisasi')
@section('content')

<!-- ====== Breadcrumbs Area ====== -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <span class="first-item">
                     <a href="{{route('index')}}">Beranda</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item">Struktur Organisasi</span>

                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->

<section class="about-main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-top-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-area text-center">
                                <h2 class="section-title default-text-gradient">Struktur Organisasi</h2>
                                {{-- <p class="section-description">Best offers from the house chef</p> --}}
                            </div><!-- /.section-title-area -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    @if ($struktur->gambar != null)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <img src="{{url('img/struktur/'.$struktur->gambar)}}"/>
                            </div>
                        </div><!-- /.col-md-7 -->
                    </div><!-- /.row -->
                    @endif
                    <div class="row">
                        {{-- <div class="col-md-5">
                            <div class="about-content-left">
                                <h2>Best<br> Rent Service,<br> enjoy your<br> life</h2>
                            </div><!-- /.about-content-left-->
                        </div><!-- /.col-md-5 --> --}}
                        <div class="col-md-12">
                            <div class="about-content-right">
                                <p>{!!$struktur->konten!!}</p>
                            </div>
                        </div><!-- /.col-md-7 -->
                    </div><!-- /.row -->
                </div><!-- /.top-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

@endsection
