@extends('layouts/dashboard/master')
@section('title','Berita')
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
      <h3 class="panel-title">Halaman Berita</h3>
    </div>
    <div class="col-md-6">
      <a href="{{route('createBerita')}}" class="btn btn-primary navbar-btn-right" id="btn-tambahberita">
        Tambah berita
      </a>
    </div>
  </div>
  <div class="panel-body" style="margin-top: 10px;">
    @if($beritas->count() != 0)
    <table class="table table-hover" id="data_beritas_reguler" style="margin-top: 10px;">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Konten</th>
          <th>Gambar</th>
					<th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $i = 1;
        @endphp
				@foreach($beritas as $berita)
        <tr>
          <td>{{$beritas->perPage()*($beritas->currentPage()-1)+$i}}</td>
          @php $i++; @endphp
          <td>{!!Str::limit($berita->judul,50)!!}</td>
          <td>{!!Str::limit($berita->konten,150)!!}</td>
          <td> <img src="{{url('img/berita/'.$berita->gambar)}}" alt="" style="max-width: 100px; max-height: 100px;"></td>
					<td>
						<a href="{{route('editBerita',$berita->id)}}" class="btn btn-primary" title="Edit"> <i class="lnr lnr-pencil"></i> </a>
						<a href="#" class="btn btn-danger hapus-berita" title="Hapus"  data-berita_id="{{$berita->id}}"> <i class="lnr lnr-trash"></i> </a>
					</td>
        </tr>
				@endforeach
      </tbody>
    </table>
    <div class="">
      {{$beritas->links()}}
    </div>
    @else
    <h3>Belum ada data berita</h3>
    @endif
  </div>
</div>

@stop
@section('linkfooter')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#btn-tambahberita').click(function(){

		});
	// 	$('#data_beritas_reguler').DataTable({
    //   'order':[[5,'desc']]
    // });
		$('#data_beritas_reguler').DataTable();

		$('.hapus-berita').click(function(){
			const berita_id = $(this).data('berita_id');
			// const hapus = confirm('Yakin ingin menghapus berita ini?');

			// if (hapus) {
			// 	window.location = '../dashboard/berita/delete/'+berita_id;
			// }

            swal({
                title: "Yakin?",
                text: "Ingin menghapus berita ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/berita/delete/"+berita_id;
                }
            });


		});

	});

</script>
@stop
