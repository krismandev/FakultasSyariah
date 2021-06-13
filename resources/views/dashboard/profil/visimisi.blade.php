@extends('layouts.dashboard.master')
@section('title','Visi Misi')
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
    <h3 class="panel-title">Halaman Visi Misi</h3>
  </div>
	@if($visimisi == null)
	<form class="" action="{{route('storeVisiMisi')}}" method="post">
    @csrf
    <div class="panel-body">
      <div class="row mt-3" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-3">
                <h3><b>Visi</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" placeholder="textarea" rows="4" name="visi" id="visi"></textarea>
            </div>
        </div>
      </div>
      <div class="row mt-3" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-3">
                <h3><b>Misi</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" placeholder="textarea" rows="4" name="misi" id="misi"></textarea>
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
  <form class="" action="{{route('storeVisiMisi')}}" method="post">
    @csrf
    <div class="panel-body">
        <div class="row mt-3" style="margin-top: 20px;">
          <div class="row">
              <div class="col-md-3">
                  <h3><b>Visi</b></h3>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <textarea class="form-control" placeholder="textarea" rows="4" name="visi" id="visi">{{$visimisi->visi}}</textarea>
              </div>
          </div>
        </div>
        <div class="row mt-3" style="margin-top: 20px;">
          <div class="row">
              <div class="col-md-3">
                  <h3><b>Misi</b></h3>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <textarea class="form-control" placeholder="textarea" rows="4" name="misi" id="misi">{{$visimisi->misi}}</textarea>
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
    CKEDITOR.replace('visi');

    CKEDITOR.replace('misi');
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
