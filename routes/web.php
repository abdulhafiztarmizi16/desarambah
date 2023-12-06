<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home.index');
// =======-LANDING-PAGE
Route::get('/laporan-apbdes', 'AnggaranRealisasiController@laporan_apbdes')->name('laporan-apbdes');

Route::get('/data-desa', 'DataDesaController@index')->name('data-desa');

// Route::get('/aparatdesa', 'AparatDesaController@index')->name('aparatdesa');

Route::get('/berita', 'BeritaController@berita')->name('berita');
Route::get('/berita/{berita}/{slug}', 'BeritaController@show')->name('berita.show');
Route::get('/berita/{berita}', function (){return abort(404);});

Route::get('/gallery', 'GalleryController@gallery')->name('gallery');
// Route::get('/panduan', 'HomeController@panduan')->name('panduan');

Route::get('/sejarah', 'DesaController@sejarah')->name('sejarah');
Route::get('/struktur-desa', 'DesaController@struktur_desa')->name('struktur-desa');
Route::get('/struktur-desa-2', 'DesaController@struktur_desa_2')->name('struktur-desa-2'); //tipe struktur desa yg kedua

Route::get('/potensi-desa', 'PariwisataController@pariwisata')->name('potensi-desa');
Route::get('/potensi-desa/{pariwisata}/{slug}', 'PariwisataController@show')->name('pariwisata.show');
Route::get('/potensi-desa/{pariwisata}', function () {return abort(404);});

Route::get('/buat-surat/{id}/{slug}', 'CetakSuratController@create')->name('buat-surat');
Route::get('/layanan-surat', 'SuratController@layanan_surat')->name('layanan-surat');
Route::post('/cetak-surat/{id}/{slug}', 'CetakSuratController@store')->name('cetak-surat.store');
// ========
// Route::get('/pemerintahan-desa', 'PemerintahanDesaController@pemerintahan_desa')->name('pemerintahan-desa');
// Route::get('/pemerintahan-desa/{pemerintahan_desa}', function (){return abort(404);});
// Route::get('/pemerintahan-desa/{pemerintahan_desa}/{slug}', 'PemerintahanDesaController@show')->name('pemerintahan-desa.show');

Route::get('/statistik-penduduk', 'GrafikController@index')->name('statistik-penduduk');
Route::get('/statistik-penduduk/show', 'GrafikController@show')->name('statistik-penduduk.show');

Route::get('/anggaran-realisasi-cart', 'AnggaranRealisasiController@cart')->name('anggaran-realisasi.cart');
// ========




// =========ADMIN AUTH
Route::group(['middleware' => ['web', 'guest']], function () {
    Route::get('/masuk', 'AuthController@index')->name('masuk');
    Route::post('/masuk', 'AuthController@masuk');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    Route::get('/visimisi', 'VisimisiController@index')->name('visimisi.index');
    Route::get('/tambah-visimisi', 'VisimisiController@create')->name('visimisi.create');
    Route::get('/edit-visimisi{visimisi}', 'VisimisiController@edit')->name('visimisi.edit');
    Route::resource('/visimisi', 'VisimisiController')->except('create', 'index', 'edit');

    
    Route::get('/aparat', 'AparatDesaController@index')->name('aparat');
    Route::get('/kelola-aparat', 'AparatDesaController@index')->name('aparat.index');
    Route::get('/tambah-aparat', 'AparatDesaController@create')->name('aparat.create');
    Route::get('/edit-aparat/{aparat}', 'AparatDesaController@edit')->name('aparat.edit');
    Route::resource('/aparat', 'AparatDesaController')->except('create', 'index', 'edit');
    
    Route::get('/kelola-pariwisata', 'PariwisataController@index')->name('pariwisata.index');
    Route::get('/tambah-pariwisata', 'PariwisataController@create')->name('pariwisata.create');
    Route::get('/edit-pariwisata/{pariwisata}', 'PariwisataController@edit')->name('pariwisata.edit');
    Route::resource('/pariwisata', 'PariwisataController')->except('create', 'show', 'index', 'edit');    

    Route::post('/keluar', 'AuthController@keluar')->name('keluar');
    Route::get('/pengaturan', 'UserController@pengaturan')->name('pengaturan');
    Route::get('/profil', 'UserController@profil')->name('profil');
    Route::patch('/update-pengaturan/{user}', 'UserController@updatePengaturan')->name('update-pengaturan');
    Route::patch('/update-profil/{user}', 'UserController@updateProfil')->name('update-profil');

    Route::get('/profil-desa', 'DesaController@index')->name('profil-desa');
    Route::patch('/update-desa/{desa}', 'DesaController@update')->name('update-desa');

    Route::get('/tambah-surat', 'SuratController@create')->name('surat.create');
    Route::get('/chart-surat/{id}', 'SuratController@chartSurat')->name('chart-surat');
    Route::patch('/cetakSurat/{cetak_surat}/arsip', 'CetakSuratController@arsip')->name('cetakSurat.arsip');
    Route::resource('/cetakSurat', 'CetakSuratController')->except('create','store','index');
    Route::resource('/surat', 'SuratController')->except('create');
    Route::resource('/isiSurat', 'IsiSuratController')->except('index', 'create', 'edit', 'show');

    Route::get('/surat-harian', 'HomeController@suratHarian')->name('surat-harian');
    Route::get('/surat-bulanan', 'HomeController@suratBulanan')->name('surat-bulanan');
    Route::get('/surat-tahunan', 'HomeController@suratTahunan')->name('surat-tahunan');

    Route::get('/kelola-pemerintahan-desa', 'PemerintahanDesaController@index')->name('pemerintahan-desa.index');
    Route::get('/tambah-pemerintahan-desa', 'PemerintahanDesaController@create')->name('pemerintahan-desa.create');
    Route::get('/edit-pemerintahan-desa/{pemerintahan_desa}', 'PemerintahanDesaController@edit')->name('pemerintahan-desa.edit');
    Route::resource('/pemerintahan-desa', 'PemerintahanDesaController')->except('create','show','index','edit');

    Route::get('/kelola-berita', 'BeritaController@index')->name('berita.index');
    Route::get('/tambah-berita', 'BeritaController@create')->name('berita.create');
    Route::get('/edit-berita/{berita}', 'BeritaController@edit')->name('berita.edit');
    Route::resource('/berita', 'BeritaController')->except('create','show','index','edit');

    Route::post('/gallery/store', 'GalleryController@storeGallery')->name('gallery.storeGallery');
    Route::get('/kelola-gallery', 'GalleryController@index')->name('gallery.index');
    Route::resource('/gallery', 'GalleryController')->except('index','show', 'edit', 'update', 'create');

    Route::get('/tambah-slider', 'GalleryController@create')->name('slider.create');
    Route::get('/slider', 'GalleryController@indexSlider')->name('slider.index');

    Route::post('/video', 'VideoController@store')->name('video.store');
    Route::patch('/video/update', 'VideoController@update')->name('video.update');

    Route::get('/tambah-penduduk', 'PendudukController@create')->name('penduduk.create');
    Route::get('/penduduk/{penduduk}', function (){return abort(404);});
    Route::resource('penduduk', 'PendudukController')->except('create','show');

    Route::get('/kelompok-jenis-anggaran/{kelompokJenisAnggaran}', 'AnggaranRealisasiController@kelompokJenisAnggaran');
    Route::get('/detail-jenis-anggaran/{id}', 'AnggaranRealisasiController@show')->name('detail-jenis-anggaran.show');
    Route::get('/tambah-anggaran-realisasi', 'AnggaranRealisasiController@create')->name('anggaran-realisasi.create');
    Route::get('/anggaran-realisasi/{anggaran_realisasi}', function (){return abort(404);});
    Route::resource('anggaran-realisasi', 'AnggaranRealisasiController')->except('create','show');

    Route::get('/tambah-dusun', 'DusunController@create')->name('dusun.create');
    Route::resource('dusun', 'DusunController')->except('create','show');
    Route::resource('detailDusun', 'DetailDusunController')->except('create','edit');

    
});

Route::fallback(function () {
    abort(404);
});
