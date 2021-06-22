@extends('layouts.dashboard.master')
@section('title','user')
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
      <h3 class="panel-title">Halaman user</h3>
    </div>
    <div class="col-md-6">
      <a href="" class="btn btn-primary navbar-btn-right" id="btn-tambahuser" data-toggle="modal" data-target="#tambahuser">
        Tambah user
      </a>
    </div>
  </div>
  <div class="panel-body" style="margin-top: 10px;">
    @if($users->count() != 0)
    <table class="table table-hover" style="margin-top: 10px;">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
					<th>Aksi</th>
        </tr>
      </thead>
      <tbody>
		@foreach($users as $user)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$user->name}}</td>
            <td> {{$user->email}} </td>
            <td>
                <a href="#" class="btn btn-primary edit-user" title="Edit" data-toggle="modal" data-target="#edituser" data-user_id="{{$user->id}}" data-email="{{$user->email}}" data-name="{{$user->name}}"> <i class="lnr lnr-pencil"></i>  </a>
                <a href="#" class="btn btn-danger hapus-user" title="Hapus" data-user_id="{{$user->id}}"> <i class="lnr lnr-trash"></i>  </a>

            </td>
        </tr>
				@endforeach
      </tbody>
    </table>
    @else
    <h3>Belum ada data user</h3>
    @endif
  </div>
</div>
<div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&useres;</span>
        </button>
      </div>
      <form class="" action="{{route('storeUser')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="row form-group">
              <div class="col-md-4">
                <span>Nama</span>
              </div>
              <div class="col-md-8">
                <input type="text" name="name" value="" class="form-control" placeholder="Nama...">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <span>Email </span>
              </div>
              <div class="col-md-8">
                <input type="email" name="email" value="" class="form-control">
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

<!-- EDIT USER- ___________________________________________________________________________________--- -->

<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&useres;</span>
        </button>
      </div>
      <form class="" action="{{route('updateUser')}}" method="post" enctype="multipart/form-data">
        @csrf @method('PATCH')
        <div class="modal-body">
            <div class="row form-group">
              <div class="col-md-4">
                <span>Nama</span>
              </div>
              <div class="col-md-8">
                <input type="hidden" name="user_id" id="user_id" value="">
                <input type="text" id="name" name="name" value="" class="form-control" placeholder="Nama...">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <span>Email </span>
              </div>
              <div class="col-md-8">
                <input type="email" id="email" name="email" value="" class="form-control">
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
		$('#btn-tambahpost').click(function(){

		});
		$('.edit-user').click(function(){
			const user_id = $(this).data('user_id');
			const email = $(this).data('email');
			const name = $(this).data('name');
			const posisi = $(this).data('posisi');


			$('#user_id').val(user_id);
			$('#email').val(email);
			$('#name').val(name);
		});

		$('.hapus-user').click(function(){
			const user_id = $(this).data('user_id');

            swal({
                title: "Hapus?",
                text: "Apa kamu yakin akan menghapus data ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                window.location = '/admin/users/delete/'+user_id;
                }
            });

		});

	});

</script>
@stop
