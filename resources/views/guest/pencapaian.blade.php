@extends('layouts.guest.master')
@section('title','Pencapaian')
@section('content')

    <!-- ====== Page Header ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Pencapaian dan Prestasi</h2>

                </div>
            </div>
        </div>
    </div>

    <!-- ====== Breadcrumbs Area ====== -->
    <div class="breadcrumbs-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Beranda</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Pencapaian</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <div class="apartments-area four bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="apartment-tab-area">
                        <div class="tab-content">
                            <div role="tabpanel" id="popular-apartment" class="tab-pane fade in active">
                                <div class="row">
                                    @foreach ($pencapaians as $pencapaian)
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                                <a href="apartment-single.html">
                                                    <img src="{{url('img/pencapaian/'.$pencapaian->gambar)}}" alt="apartment" style="width: 377px; height: 283px; object-fit: cover; object-position: center;">
                                                </a>
                                            </div><!-- /.image-content -->

                                            <div class="text-content">
                                                <div class="top-content">
                                                    <h3>
                                                        <a href="#">{{$pencapaian->judul}}</a>
                                                    </h3>
                                                </div><!-- /.top-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->
                                    @endforeach

                                </div><!-- /.row -->
                                {{$pencapaians->links()}}
                            </div><!-- /.popular-apartment -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.apartment-tab-area -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection
@section('linkfooter')
<script>
    $(document).ready(function () {
        $('#data_panduans_reguler').DataTable();
    });
</script>
@endsection
