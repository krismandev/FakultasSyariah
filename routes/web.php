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

Route::get('/', function () {
    return view('guest.index');
});

Auth::routes();
Route::get('/login','AuthController@login')->name('login');
Route::post('/login','AuthController@postLogin')->name('postLogin');
Route::get('/logout','AuthController@logout')->name('logout');

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

    Route::group(['prefix'=>'kalender-wisuda'],function(){
        Route::get('/','Dashboard\KalenderWisudaController@getKalenderWisuda')->name('getKalenderWisuda');
        Route::post('/','Dashboard\KalenderWisudaController@storeKalenderWisuda')->name('storeKalenderWisuda');
        Route::get('/delete/{id}','Dashboard\KalenderWisudaController@deleteKalenderWisuda')->name('deleteKalenderWisuda');
    });

});
