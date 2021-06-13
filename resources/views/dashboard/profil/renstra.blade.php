@extends('layouts/dashboard/master')
@section('title','Renstra')
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
      <h3 class="panel-title">Rencana Strategis</h3>
    </div>
    {{-- <div class="col-md-6">
      <a href="" class="btn btn-primary navbar-btn-right" id="btn-tambahpost">
        Tambah post
      </a>
    </div> --}}
  </div>
  <hr>
  <div class="panel-body">
    @if ($renstra == null)
  <form action="{{route('storeRenstra')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-lg-2">
        Dokumen
      </div>
      <div class="col-lg-10">
        <input type="file" class="form-control" name="file">
      </div>
    </div>
    <div class="row" style="margin-top:10px;">
      <div class="col-lg-2">
        <h4>Konten</h4>
      </div>
    </div>
    <div class="row mt-5" style="margin-top:10px;">
        <small>Tulis Rencana Strategis Pada Textbox dibawah ini.</small>
        <textarea class="form-control" name="konten" rows="10" cols="auto" id="konten">{{old('konten')}}</textarea>
    </div>
    <div class="row" style="margin-top:10px;">
      <div class="col-lg-10">
        <button type="submit" name="button" class="btn btn-primary"> <i class="lnr lnr-upload"></i>Simpan</button>
      </div>
    </div>
  </form>
  @else
  <form action="{{route('storeRenstra')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-lg-2">
        Dokumen
      </div>
      <div class="col-lg-6">
        <input type="file" class="form-control" name="file">
        <small>Abaikan jika tidak ingin mengubah dokumen</small>
      </div>
      <div class="col-lg-4">
          @if ($renstra->file != null)
          <a href="{{url('doc/renstra/'.$renstra->file)}}" class="btn btn-primary"> Download</a>
          @endif
      </div>
    </div>
    <div class="row" style="margin-top:10px;">
      <div class="col-lg-2">
        <h4>Konten</h4>
      </div>
    </div>
    <div class="row mt-5" style="margin-top:10px;">
        <small>Tulis Rencana Strategis Pada Textbox dibawah ini.</small>
        <textarea class="form-control" name="konten" rows="10" cols="auto" id="konten">{{$renstra->konten}}</textarea>
    </div>
    <div class="row" style="margin-top:10px;">
      <div class="col-lg-10">
        <button type="submit" name="button" class="btn btn-primary"> <i class="lnr lnr-upload"></i>Simpan</button>
      </div>
    </div>
  </form>
  @endif
  </div>
</div>

@stop
@section('linkfooter')
<script>
CKEDITOR.replace('konten');
</script>

@stop
