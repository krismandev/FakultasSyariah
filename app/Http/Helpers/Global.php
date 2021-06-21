<?php

use App\Banner;
use App\Berita;
use App\DosenProdi;
use App\Galeri;

function sumBerita()
{
    $sumBerita = Berita::count();
    return $sumBerita;
}

function sumDosen()
{
    $sumDosen = DosenProdi::count();
    return $sumDosen;
}

function sumGaleri()
{
    $sumGaleri = Galeri::count();
    return $sumGaleri;
}

function sumBanner()
{
    $sumBanner = Banner::count();
    return $sumBanner;
}


