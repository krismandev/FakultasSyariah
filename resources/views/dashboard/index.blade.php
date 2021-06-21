@extends('layouts.dashboard.master')
@section('title','Dashboard')
@section('content')
<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Selamat Datang {{auth()->user()->name}}</h3>
		<p class="panel-subtitle">Update terbaru hari ini</p>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-newspaper-o"></i></span>
					<p>
						<span class="number">{{sumBerita()}}</span>
						<span class="title">Berita</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="lnr lnr-users"></i></span>
					<p>
						<span class="number">{{sumDosen()}}</span>
						<span class="title">Dosen</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="lnr lnr-picture"></i></span>
					<p>
						<span class="number"></span>
						<span class="title">Galeri</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="lnr lnr-picture"></i></span>
					<p>
						<span class="number">{{sumBanner()}}</span>
						<span class="title">Banner</span>
					</p>
				</div>
			</div>

		</div>
    {{-- <div class="row">
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-eye"></i></span>
					<p>
						<span class="number"></span>
						<span class="title">Tim</span>
					</p>
				</div>
			</div>
    </div> --}}

	</div>
</div>
@stop
