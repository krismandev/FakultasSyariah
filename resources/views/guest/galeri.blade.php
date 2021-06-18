@extends('layouts.guest.master')
@section('title','Galeri')
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
                     <a href="{{route('index')}}">Beranda</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item">Galeri</span>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->

<div class="photo-gallery-area">
    <div class="container">
        <div class="col-md-12">
            <div class="heading-content-two text-center">
                <h2 class="title default-text-gradient">Galeri</h2>
            </div><!-- /.photo-heading-content -->
        </div><!-- /.col-md-12 -->
        <div class="row">
            @if ($galeris != null)
            @foreach ($galeris as $galeri)
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="gallery-image-content">
                    <img src="{{url('img/galeri/'.$galeri->gambar)}}" alt="blog" style="width: 269px; height: 234px; object-fit: cover; object-position: center;"/>
                    <div class="overlay-background gradient-transparent">
                        <a href="{{url('img/galeri/'.$galeri->gambar)}}" class="image-pop-up">
                            {{-- <span><i class="fa fa-picture-o"></i>Apartment</span> --}}
                        </a><!-- /.hover-content -->
                    </div><!-- /.hover-content -->

                </div><!-- /.image-content -->
            </div><!-- /.col-md-3 -->
            @endforeach
            @endif
        </div><!-- /.row -->
        {{-- <a href="#" class="button nevy-button button-radius default-template-gradient">lode more</a> --}}
        <div>
            {{$galeris->links()}}
        </div>
    </div><!-- /.container -->
</div><!-- /.photo-gallery-area-->

@endsection
