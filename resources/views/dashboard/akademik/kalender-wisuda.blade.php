@extends('layouts.dashboard.master')
@section('title','Kalender Wisuda')
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
      <h3 class="panel-title">Halaman Kalender Wisuda</h3>
    </div>
    <div class="col-md-6">
      <a href="#" class="btn btn-primary navbar-btn-right" data-toggle="modal" data-target="#tambahkalender"  id="btn-tambahkalender">
        Tambah agenda
      </a>
    </div>
  </div>
  <div class="panel-body" style="margin-top: 10px;">
    @if($kalenders->count() != 0)
    <table class="table table-hover" id="data_kalenders_reguler" style="margin-top: 10px;">
      <thead>
        <tr>
            <th>#</th>
            <th>Agenda</th>
            <th>Tanggal Pelaksanaan</th>
		    <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

		@foreach($kalenders as $kalender)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$kalender->agenda}}</td>
          <td>{{date('d M Y', strtotime($kalender->tanggal_pelaksanaan))}}</td>
			<td> <a href="#" class="btn btn-danger hapus-kalender" title="Hapus" data-kalender_id="{{$kalender->id}}"> <i class="lnr lnr-trash"></i> </a> </td>
        </tr>
		@endforeach
      </tbody>
    </table>
    @else
    <h3>Belum ada data agenda wisuda</h3>
    @endif
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="tambahkalender" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah kalender</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<form class="" action="{{route('storeKalenderWisuda')}}" method="post" enctype="multipart/form-data">
				@csrf
	      <div class="modal-body">
            <div class="row form-group">
                <div class="col-md-4">
                    <span>Nama Agenda</span>
                </div>
                <div class="col-md-8">
                    <input type="text" name="agenda" value="" class="form-control" placeholder="Cth: Pelaksanaan Wisuda Sarjana ke - ...">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span>Tanggal Pelaksanaan</span>
                </div>
                <div class="col-md-8">
                    <input type="date" name="tanggal_pelaksanaan" value="" class="form-control">
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
		$('#btn-tambahkalender').click(function(){

		});
		$('#data_kalenders_reguler').DataTable();

		$('.hapus-kalender').click(function(){
			const kalender_id = $(this).data('kalender_id');
	    swal({
            title: "Hapus?",
            text: "Apa kamu yakin akan menghapus data ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            window.location = '/admin/kalender-wisuda/delete/'+kalender_id;
            }
        });



		});

	});

</script>
@stop
