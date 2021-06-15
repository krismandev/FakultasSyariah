@extends('layouts.dashboard.master')
@section('title','Laporan')
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
      <h3 class="panel-title">Halaman Laporan</h3>
    </div>
    <div class="col-md-6">
      <a href="#" class="btn btn-primary navbar-btn-right" data-toggle="modal" data-target="#tambahlaporan"  id="btn-tambahlaporan">
        Tambah
      </a>
    </div>
  </div>
  <div class="panel-body" style="margin-top: 10px;">
    @if($laporans->count() != 0)
    <table class="table table-hover" id="data_laporans_reguler" style="margin-top: 10px;">
      <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Dokumen</th>
		    <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

		@foreach($laporans as $laporan)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$laporan->judul}}</td>
          <td> <a href="{{url('doc/laporan/'.$laporan->file)}}" target="_blank"> Download</a> </td>
			<td> <a href="#" class="btn btn-danger hapus-laporan" title="Hapus" data-laporan_id="{{$laporan->id}}"> <i class="lnr lnr-trash"></i> </a> </td>
        </tr>
		@endforeach
      </tbody>
    </table>
    @else
    <h3>Belum ada data laporan</h3>
    @endif
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="tambahlaporan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<form class="" action="{{route('storeLaporan')}}" method="post" enctype="multipart/form-data">
				@csrf
	      <div class="modal-body">
          <div class="row form-group">
            <div class="col-md-4">
              <span>Nama laporan</span>
            </div>
            <div class="col-md-8">
              <input type="hidden" name="user_id" id="user_id" value="">
              <input type="text" name="judul" value="" class="form-control" placeholder="Cth. Laporan Tahunan 2020...">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <span>File </span>
            </div>
            <div class="col-md-8">
              <input type="file" name="file" value="" class="form-control">
            </div>
          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
			</form>

    </div>
  </div>
</div>
@stop
@section('linkfooter')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	$(document).ready(function() {
		$('#btn-tambahlaporan').click(function(){

		});
		$('#data_laporans_reguler').DataTable();

		$('.hapus-laporan').click(function(){
			const laporan_id = $(this).data('laporan_id');
	    swal({
            title: "Hapus?",
            text: "Apa kamu yakin akan menghapus data ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            window.location = '/admin/laporan/delete/'+laporan_id;
            }
        });



		});

	});

</script>
@stop
