@extends('layouts.guest.master')
@section('title','Berita')
@section('content')

    <!-- ====== Page Header ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Kalender Wisuda</h2>

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
                         <a href="{{route('index')}}">Beranda</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Kalender Wisuda</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <section class="about-main-content" style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-area text-center">
                                <h2 class="section-title default-text-gradient">Kalender Wisuda</h2>
                                {{-- <p class="section-description">Best offers from the house chef</p> --}}
                            </div><!-- /.section-title-area -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="about-top-content">
                            <table class="table table-striped" id="data_kalenders_reguler">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Agenda</th>
                                    <th scope="col">Tanggal Pelaksanaan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($kalenders as $kalender)
                                    <tr>
                                        <td scope="row">{{$kalenders->perPage()*($kalenders->currentPage()-1)+$i}}</td>
                                        @php
                                            $i++;
                                        @endphp
                                        <td>{{$kalender->agenda}}</td>
                                        <td>{{date('d M Y',strtotime($kalender->tanggal_pelaksanaan))}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('linkfooter')
<script>
    $(document).ready(function () {
        $('#data_kalenders_reguler').DataTable();
    });
</script>
@endsection
