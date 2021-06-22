<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index')->name('index');

Auth::routes();
Route::get('/login','AuthController@login')->name('login');
Route::post('/login','AuthController@postLogin')->name('postLogin');
Route::get('/logout','AuthController@logout')->name('logout');

Route::get('/berita','BeritaController@berita')->name('berita');
Route::get('/berita/{id}/{slug}','BeritaController@singleBerita')->name('singleBerita');

Route::get('/sejarah','ProfilController@sejarah')->name('sejarah');
Route::get('/visi-misi','ProfilController@visimisi')->name('visimisi');
Route::get('/struktur-organisasi','ProfilController@struktur')->name('struktur');
Route::get('/renstra','ProfilController@renstra')->name('renstra');
Route::get('/senat-fakultas','ProfilController@senat')->name('senat');

Route::get('/prodi/{id}/{slug}','ProdiController@singleProdi')->name('singleProdi');



Route::group(['prefix'=>'akademik'],function(){
    Route::get('/akreditasi','AkademikController@akreditasi')->name('akreditasi');
    Route::get('/panduan-akademik','AkademikController@panduan')->name('panduan');
    Route::get('/kalender-wisuda','AkademikController@kalenderWisuda')->name('kalenderWisuda');
});

Route::get('/galeri','GaleriController@galeri')->name('galeri');

Route::get('/laporan','LaporanController@laporan')->name('laporan');
Route::get('/pencapaian','PencapaianController@pencapaian')->name('pencapaian');


Route::group(['middleware' => ['auth','checkRole:s,a'],'prefix' => 'admin'], function(){
    Route::get('/','Dashboard\HomeController@index')->name('index_admin');
    Route::group(['prefix'=>'berita'],function(){
        Route::get('/','Dashboard\BeritaController@getBerita')->name('getBerita');
        Route::get('/create','Dashboard\BeritaController@createBerita')->name('createBerita');
        Route::post('/','Dashboard\BeritaController@storeBerita')->name('storeBerita');
        Route::get('/edit/{id}','Dashboard\BeritaController@editBerita')->name('editBerita');
        Route::patch('/','Dashboard\BeritaController@updateBerita')->name('updateBerita');
        Route::get('/delete/{id}','Dashboard\BeritaController@deleteBerita')->name('deleteBerita');
    });


    Route::group(['prefix'=>'banner'],function(){
        Route::get('/','Dashboard\BannerController@getBanner')->name('getBanner');
        Route::post('/','Dashboard\BannerController@storeBanner')->name('storeBanner');
        Route::get('/delete/{id}','Dashboard\BannerController@deleteBanner')->name('deleteBanner');
    });

    Route::group(['prefix'=>'galeri'],function(){
        Route::get('/','Dashboard\GaleriController@getGaleri')->name('getGaleri');
        Route::post('/','Dashboard\GaleriController@storeGaleri')->name('storeGaleri');
        Route::get('/delete/{id}','Dashboard\GaleriController@deleteGaleri')->name('deleteGaleri');
    });

    Route::prefix('/akademik')->group(function () {
        Route::group(['prefix'=>'akreditasi-institusi'],function(){
            Route::get('/','Dashboard\AkreditasiController@getAkreditasi')->name('getAkreditasi');
            Route::post('/','Dashboard\AkreditasiController@storeAkreditasi')->name('storeAkreditasi');
            Route::get('/delete/{id}','Dashboard\AkreditasiController@deleteAkreditasi')->name('deleteAkreditasi');
        });

        Route::group(['prefix'=>'akreditasi-prodi'],function(){
            Route::get('/','Dashboard\AkreditasiController@getAkrProdi')->name('getAkrProdi');
            Route::post('/','Dashboard\AkreditasiController@storeAkrProdi')->name('storeAkrProdi');
            Route::get('/delete/{id}','Dashboard\AkreditasiController@deleteAkrProdi')->name('deleteAkrProdi');
        });

        Route::group(['prefix'=>'panduan-akademik'],function(){
            Route::get('/','Dashboard\PanduanAkademikController@getPanduan')->name('getPanduan');
            Route::post('/','Dashboard\PanduanAkademikController@storePanduan')->name('storePanduan');
            Route::get('/delete/{id}','Dashboard\PanduanAkademikController@deletePanduan')->name('deletePanduan');
        });

        Route::group(['prefix'=>'kalender-wisuda'],function(){
            Route::get('/','Dashboard\KalenderWisudaController@getKalenderWisuda')->name('getKalenderWisuda');
            Route::post('/','Dashboard\KalenderWisudaController@storeKalenderWisuda')->name('storeKalenderWisuda');
            Route::get('/delete/{id}','Dashboard\KalenderWisudaController@deleteKalenderWisuda')->name('deleteKalenderWisuda');
        });
    });

    Route::group(['prefix'=>'profil'],function(){
        Route::group(['prefix'=>'visimisi'],function(){
            Route::get('/','Dashboard\ProfilController@getVisiMisi')->name('getVisiMisi');
            Route::post('/','Dashboard\ProfilController@storeVisiMisi')->name('storeVisiMisi');
        });

        Route::group(['prefix'=>'struktur-organisasi'],function(){
            Route::get('/','Dashboard\StrukturOrganisasiController@getStruktur')->name('getStruktur');
            Route::post('/','Dashboard\StrukturOrganisasiController@storeStruktur')->name('storeStruktur');
        });

        Route::group(['prefix'=>'sejarah'],function(){
            Route::get('/','Dashboard\ProfilController@getSejarah')->name('getSejarah');
            Route::post('/','Dashboard\ProfilController@storeSejarah')->name('storeSejarah');
        });

        Route::group(['prefix'=>'renstra'],function(){
            Route::get('/','Dashboard\ProfilController@getRenstra')->name('getRenstra');
            Route::post('/','Dashboard\ProfilController@storeRenstra')->name('storeRenstra');
        });

        Route::group(['prefix'=>'struktur-organisasi'],function(){
            Route::get('/','Dashboard\ProfilController@getStruktur')->name('getStruktur');
            Route::post('/','Dashboard\ProfilController@storeStruktur')->name('storeStruktur');
        });

        Route::group(['prefix'=>'senat-fakultas'],function(){
            Route::get('/','Dashboard\ProfilController@getSenat')->name('getSenat');
            Route::post('/','Dashboard\ProfilController@storeSenat')->name('storeSenat');
        });
    });

    Route::group(['prefix'=>'prodi'],function(){
        Route::get('/','Dashboard\ProdiController@getProdi')->name('getProdi');
        Route::post('/','Dashboard\ProdiController@updateProdi')->name('updateProdi');
        Route::get('/{id}','Dashboard\ProdiController@editProdi')->name('editProdi');
        Route::post('/dosen','Dashboard\ProdiController@storeDosen')->name('storeDosen');
        Route::get('/dosen/delete/{id}','Dashboard\ProdiController@deleteDosen')->name('deleteDosen');

    });

    Route::group(['prefix'=>'laporan'],function(){
        Route::get('/','Dashboard\LaporanController@getLaporan')->name('getLaporan');
        Route::post('/','Dashboard\LaporanController@storeLaporan')->name('storeLaporan');
        Route::get('/delete/{id}','Dashboard\LaporanController@deleteLaporan')->name('deleteLaporan');
    });

    Route::group(['prefix'=>'pimpinan-fakultas'],function(){
        Route::get('/','Dashboard\PimpinanFakultasController@getPimpinan')->name('getPimpinan');
        Route::post('/','Dashboard\PimpinanFakultasController@storePimpinan')->name('storePimpinan');
        Route::get('/delete/{id}','Dashboard\PimpinanFakultasController@deletePimpinan')->name('deletePimpinan');
    });

    Route::group(['prefix'=>'pencapaian'],function(){
        Route::get('/','Dashboard\PencapaianController@getPencapaian')->name('getPencapaian');
        Route::post('/','Dashboard\PencapaianController@storePencapaian')->name('storePencapaian');
        Route::get('/delete/{id}','Dashboard\PencapaianController@deletePencapaian')->name('deletePencapaian');
    });

});

Route::group(['middleware' => ['auth','checkRole:s'],'prefix' => 'admin'], function(){
    Route::group(['prefix'=>'users'],function(){
        Route::get('/','Dashboard\UserController@getUser')->name('getUser');
        Route::post('/','Dashboard\UserController@storeUser')->name('storeUser');
        Route::patch('/','Dashboard\UserController@updateUser')->name('updateUser');

        Route::get('/delete/{id}','Dashboard\UserController@deleteUser')->name('deleteUser');
    });
});
