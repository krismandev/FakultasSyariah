@extends('layouts/dashboard/master')
@section('title','Buat berita baru')
@section('header')

@stop
@section('content')
@if(session('success'))

<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<i class="fa fa-check-circle"></i> {{session('success')}}
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="panel">
  <div class="panel-heading" style="margin-bottom:20px;">
    <div class="col-md-6">
      <h3 class="panel-title">Buat Berita</h3>
    </div>
    {{-- <div class="col-md-6">
      <a href="" class="btn btn-primary navbar-btn-right" id="btn-tambahpost">
        Tambah post
      </a>
    </div> --}}
  </div>
  <hr>
  <div class="panel-body">
  <form action="{{route('storeBerita')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-lg-2">
        Gambar
      </div>
      <div class="col-lg-10">
        <input type="file" class="form-control" name="gambar">
      </div>
    </div>
    <div class="row" style="margin-top:10px;">
      <div class="col-lg-2">
        Judul
      </div>
      <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="tulis judul disini..." name="judul">
      </div>
    </div>
    <div class="row" style="margin-top:10px;">
      <div class="col-lg-2">
        <h4>Konten</h4>
      </div>
    </div>
    <div class="row mt-5" style="margin-top:10px;">
      <textarea class="form-control" name="konten" rows="10" cols="auto" id="konten"></textarea>
    </div>
    <div class="row" style="margin-top:10px;">
      <div class="col-lg-10">
        <button type="submit" name="button" class="btn btn-primary"> <i class="lnr lnr-upload"></i>Simpan</button>
      </div>
    </div>
  </form>
  </div>
</div>

@stop
@section('linkfooter')
<script>
ClassicEditor
            .create( document.querySelector( '#konten' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>

@stop