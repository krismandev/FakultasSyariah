@extends('layouts.guest.master')
@section('title','Berita')
@section('content')

    <!-- ====== Page Header ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Akreditasi</h2>

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
                        <span class="last-item">Akreditasi</span>
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
                                <h2 class="section-title default-text-gradient">Akreditasi Institusi</h2>
                                {{-- <p class="section-description">Best offers from the house chef</p> --}}
                            </div><!-- /.section-title-area -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="about-top-content">
                            <table class="table table-striped" id="data_akreditasis_reguler">
                                <thead>
                                  <tr>
                                    <th scope="col">Nama Akreditasi</th>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Dokumen</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($akreditasis as $akreditasi)
                                    <tr>
                                        <td scope="row">{{$akreditasi->nama_akreditasi}}</td>
                                        <td>{{$akreditasi->nomor}}</td>
                                        <td>
                                            <a href="{{url('doc/akreditasi/'.$akreditasi->file)}}">PDF</a>
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

    <section class="about-main-content" style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-area text-center">
                                <h2 class="section-title default-text-gradient">Akreditasi Prodi</h2>
                                {{-- <p class="section-description">Best offers from the house chef</p> --}}
                            </div><!-- /.section-title-area -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="about-top-content">
                            <table class="table table-striped" id="data_akreditasis_reguler">
                                <thead>
                                  <tr>
                                    <th scope="col">Prodi</th>
                                    <th scope="col">Nomor SK</th>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Sertifikat</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($akr_prodis as $akr_prodi)
                                    <tr>
                                        <th scope="row">{{$akr_prodi->prodi->nama_prodi}}</th>
                                        <td>{{$akr_prodi->nomor_sk}}</td>
                                        <td>{{$akr_prodi->peringkat}}</td>
                                        <td>
                                            <a href="{{url('doc/akreditasi/'.$akr_prodi->sertifikat)}}">PDF</a>
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
        $('#data_akreditasis_reguler').DataTable();
    });
</script>
@endsection

