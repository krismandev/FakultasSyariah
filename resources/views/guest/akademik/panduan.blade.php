@extends('layouts.guest.master')
@section('title','Berita')
@section('content')

    <!-- ====== Page Header ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">panduan</h2>

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
                        <span class="last-item">panduan</span>
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
                                <h2 class="section-title default-text-gradient">panduan Institusi</h2>
                                {{-- <p class="section-description">Best offers from the house chef</p> --}}
                            </div><!-- /.section-title-area -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="about-top-content">
                            <table class="table table-striped" id="data_panduans_reguler">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Judul Panduan</th>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Dokumen</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($panduans as $panduan)
                                    <tr>
                                        <td scope="row">{{$panduans->perPage()*($panduans->currentPage()-1)+$i}}</td>
                                        <td>{{$panduan->judul_panduan}}</td>
                                        <td>{{$panduan->nomor}}</td>
                                        <td>
                                            <a href="{{url('doc/panduan/'.$panduan->file)}}">PDF</a>
                                        </td>
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
        $('#data_panduans_reguler').DataTable();
    });
</script>
@endsection
