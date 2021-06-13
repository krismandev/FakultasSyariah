@extends('layouts.dashboard.master')
@section('title','Program Studi')
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
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
  <div class="panel-heading">
    <div class="col-md-6">
      <h3 class="panel-title">Halaman Program Studi</h3>
    </div>
  </div>
  <div class="panel-body" style="margin-top: 10px;">
    @if($prodis->count() != 0)
    <table class="table table-hover" id="data_prodis_reguler" style="margin-top: 10px;">
      <thead>
        <tr>
            <th>#</th>
            <th>Nama Prodi</th>
		    <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

		@foreach($prodis as $prodi)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$prodi->nama_prodi}}</td>
			<td> <a href="{{route('editProdi',$prodi->id)}}" class="btn btn-primary" title="Buka"> Buka </a> </td>
        </tr>
		@endforeach
      </tbody>
    </table>
    @else
    <h3>Belum ada data prodi</h3>
    @endif
  </div>
</div>


@stop
@section('linkfooter')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
@stop
