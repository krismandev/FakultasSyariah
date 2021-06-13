@extends('layouts.dashboard.master')
@section('title','Struktur Organisasi')
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
  <div class="panel-heading">
    <h3 class="panel-title">Halaman Struktur Organisasi</h3>
  </div>
	@if($struktur_organisasi == null)
	<form class="" action="{{route('storeStruktur')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="panel-body">
      <div class="row mt-3" style="margin-top: 20px;">
        <div class="col-md-2">
            <span><b>Gambar</b></span>
        </div>
        <div class="col-md-9">
            <input type="file" name="gambar" class="form-controll">
        </div>
      </div>
      <div class="row mt-3" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-3">
                <span><b>Konten Struktur Organisasi</b></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" placeholder="textarea" rows="4" name="konten" id="misi"></textarea>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <!-- <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Update</button>
           -->
          <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Simpan</button>

        </div>
      </div>
    </div>
  </form>
	@else
  <form class="" action="{{route('storeStruktur')}}" method="post">
    @csrf
    <div class="panel-body">
        <div class="row mt-3" style="margin-top: 20px;">
          <div class="col-md-3">
            <span><b>Gambar</b></span>
          </div>
          <div class="col-md-3">
              <input type="file" name="gambar" class="form-controll">
              <small>Abaikan jika tidak ingin mengubah gambar</small>
          </div>
          <div class="col-md-6">
            <img src="{{url('img/struktur/'.$struktur_organisasi->gambar)}}" alt="" style="width: 100%;">
        </div>
        </div>
        <div class="row mt-3" style="margin-top: 20px;">
          <div class="row">
              <div class="col-md-3">
                  <span><b>Konten Struktur Organisasi</b></span>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <textarea class="form-control" placeholder="textarea" rows="4" name="konten" id="misi">{{$struktur_organisasi->konten}}</textarea>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">

            <!-- <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Update</button>
             -->
            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Simpan</button>

          </div>
        </div>
      </div>
  </form>
	@endif
</div>
@stop
@section('linkfooter')
<script>
    CKEDITOR.replace('konten');
</script>
{{-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script> --}}
{{-- <script>
ClassicEditor
            .create( document.querySelector( '#visi' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );

ClassicEditor
            .create( document.querySelector( '#misi' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script> --}}

@stop
