@extends('layouts.dashboard.master')
@section('title','Akreditasi')
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
      <h3 class="panel-title">Halaman Akreditasi Prodi</h3>
    </div>
    <div class="col-md-6">
      <a href="#" class="btn btn-primary navbar-btn-right" data-toggle="modal" data-target="#tambahakreditasi"  id="btn-tambahakreditasi">
        Tambah data akreditasi prodi
      </a>
    </div>
  </div>
  <div class="panel-body" style="margin-top: 10px;">
    @if($akr_prodis->count() != 0)
    <table class="table table-hover" id="data_akr_prodis_reguler" style="margin-top: 10px;">
      <thead>
        <tr>
            <th>#</th>
            <th>Prodi</th>
            <th>Strata</th>
            <th>Peringkat</th>
            <th>Nomor SK</th>
            <th>Sertifikat</th>
		    <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

		@foreach($akr_prodis as $akreditasi)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$akreditasi->prodi->nama_prodi}}</td>
          <td>{{$akreditasi->strata}}</td>
          <td>{{$akreditasi->peringkat}}</td>
          <td>{{$akreditasi->nomor_sk}}</td>
          <td> <a href="{{url('doc/akreditasi/'.$akreditasi->file)}}" target="_blank"> Download</a> </td>
			<td> <a href="#" class="btn btn-danger hapus-akreditasi" title="Hapus" data-akreditasi_id="{{$akreditasi->id}}"> <i class="lnr lnr-trash"></i> </a> </td>
        </tr>
		@endforeach
      </tbody>
    </table>
    @else
    <h3>Belum ada data akreditasi</h3>
    @endif
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="tambahakreditasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah akreditasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		<form class="" action="{{route('storeAkrProdi')}}" method="post" enctype="multipart/form-data">
		    @csrf
	      <div class="modal-body">
          <div class="row form-group">
            <div class="col-md-4">
              <span>Prodi</span>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="prodi_id">
                    <option value="" selected>Pilih Prodi</option>
                    @foreach ($prodis as $prodi)
                    <option value="{{$prodi->id}}">{{$prodi->nama_prodi}}</option>
                    @endforeach
                </select>
              {{-- <input type="text" name="nama_akreditasi" value="" class="form-control" placeholder="Nama akreditasi..."> --}}
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <span>Strata</span>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="strata">
                    <option value="" selected>Pilih</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select>
              {{-- <input type="text" name="nama_akreditasi" value="" class="form-control" placeholder="Nama akreditasi..."> --}}
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <span>Peringkat</span>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="peringkat">
                    <option value="" selected>Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
              {{-- <input type="text" name="nama_akreditasi" value="" class="form-control" placeholder="Nama akreditasi..."> --}}
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <span>Nomor SK</span>
            </div>
            <div class="col-md-8">
              <input type="text" name="nomor_sk" value="" class="form-control" placeholder="Nomor Akreditasi...">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <span>Sertifikat </span>
            </div>
            <div class="col-md-8">
              <input type="file" name="sertifikat" value="" class="form-control">
              <small>file Pdf</small>
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
		$('#btn-tambahakreditasi').click(function(){

		});
		$('#data_akr_prodis_reguler').DataTable();

		$('.hapus-akreditasi').click(function(){
			const akreditasi_id = $(this).data('akreditasi_id');
	    swal({
            title: "Hapus?",
            text: "Apa kamu yakin akan menghapus data ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            window.location = '/admin/akreditasi-prodi/delete/'+akreditasi_id;
            }
        });



		});

	});

</script>
@stop
