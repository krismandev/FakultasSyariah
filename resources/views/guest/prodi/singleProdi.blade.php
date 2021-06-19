@extends('layouts.guest.master')
@section('title',$prodi->nama_prodi)
@section('content')

<style>
    @media screen and (max-width:480px){
        .dosen-grid{
            width: 50%;
        }


    }
</style>

    <!-- ====== Page Header ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Prodi</h2>

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
                         <a href="{{route('index')}}">Beranda</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">{{$prodi->nama_prodi}}</span>
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
                                    <h2 class="section-title default-text-gradient">{{$prodi->nama_prodi}}</h2>
                                    {{-- <p class="section-description">Best offers from the house chef</p> --}}
                                </div><!-- /.section-title-area -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                        <div class="row">
                            {{-- <div class="col-md-5">
                                <div class="about-content-left">
                                    <h2>Best<br> Rent Service,<br> enjoy your<br> life</h2>
                                </div><!-- /.about-content-left-->
                            </div><!-- /.col-md-5 --> --}}
                            <div class="col-md-12">
                                <div class="about-content-right">
                                    <p>{!!$prodi->konten!!}</p>
                                </div>
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.top-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    @php

    // dd($dosens);
    @endphp
    @if ($dosens->count() != 0)
    <div class="apartments-area four bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="apartment-tab-area">
                        <div class="tab-content">
                            <div role="tabpanel" id="popular-apartment" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-title-area text-center">
                                            <h2 class="section-title default-text-gradient">Dosen</h2>
                                            {{-- <p class="section-description">Best offers from the house chef</p> --}}
                                        </div><!-- /.section-title-area -->
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="row">

                                    @foreach ($dosens as $dosen)
                                    <div class="col-md-3 col-sm-6 col-xs-6 dosen-grid">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                               <a href="{{url('img/dosen/'.$dosen->gambar)}}"><img src="{{url('img/dosen/'.$dosen->gambar)}}" class="dosen-image" alt="apartment" style="width: 360px; height: 270px; object-fit: cover; object-position: center;"></a>
                                            </div><!-- /.image-content -->

                                            <div class="text-content">
                                                <div class="top-content">
                                                   <h3><a href="apartment-single.html">{{$dosen->nama}}</a></h3>
                                                   <span>

                                                       {{$dosen->posisi}}
                                                   </span>
                                                </div><!-- /.top-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->
                                    @endforeach

                                </div><!-- /.row -->
                            </div><!-- /.popular-apartment -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.apartment-tab-area -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    @endif


@endsection
