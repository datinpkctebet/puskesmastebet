<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/standar-pelayanan', function () {
    return view('pages.standar-pelayanan');
});

/*
|--------------------------------------------------------------------------
| BLOG
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'news'], function()
{
    Route::get('/', 'NewsController@index');

    Route::get('/{slug}', 'NewsController@show');
});

/*
|--------------------------------------------------------------------------
| PROFIL
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'profil'], function()
{
    Route::get('/admin', function () {
        return view('pages.profil.admin');
    });

    Route::get('/mutu', function () {
        return view('pages.profil.mutu');
    });

    Route::get('/ukp', function () {
        return view('pages.profil.ukp');
    });

    Route::get('/ukm', function () {
        return view('pages.profil.ukm');
    });

    Route::get('/visi-misi', function () {
        return view('pages.profil.visi-misi');
    });

    Route::get('/hak-kewajiban', function () {
        return view('pages.profil.hak-kewajiban');
    });
});

/*
|--------------------------------------------------------------------------
| POLI
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'poliukp'], function()
{
    Route::get('/', function () {
        return view('pages.poliukp.indexUkp');
    });

    Route::get('/poliUmum', function () {
        return view('pages.poliukp.poliUmum');
    });

    Route::get('/poliGizi', function () {
        return view('pages.poliukp.poliGizi');
    });

    Route::get('/poliPendaftaran', function () {
        return view('pages.poliukp.poliPendaftaran');
    });

    Route::get('/poliFarmasi', function () {
        return view('pages.poliukp.poliFarmasi');
    });

    Route::get('/poliLaboratorium', function () {
        return view('pages.poliukp.poliLaboratorium');
    });

    Route::get('/poliLay24', function () {
        return view('pages.poliukp.poliLay24');
    });

    Route::get('/poliRb', function () {
        return view('pages.poliukp.poliRb');
    });

    Route::get('/poliPtm', function () {
        return view('pages.poliukp.poliPtm');
    });

    Route::get('/poliLansia', function () {
        return view('pages.poliukp.poliLansia');
    });

    Route::get('/poliGigi', function () {
        return view('pages.poliukp.poliGigi');
    });

    Route::get('/poliMtbs', function () {
        return view('pages.poliukp.poliMtbs');
    });

    Route::get('/poliSahabat', function () {
        return view('pages.poliukp.poliSahabat');
    });

    Route::get('/poliKia', function () {
        return view('pages.poliukp.poliKia');
    });

    Route::get('/poliKb', function () {
        return view('pages.poliukp.poliKb');
    });

    Route::get('/poliKa', function () {
        return view('pages.poliukp.poliKa');
    });

    Route::get('/poliDots', function () {
        return view('pages.poliukp.poliDots');
    });

    Route::get('/poliHaji', function () {
        return view('pages.poliukp.poliHaji');
    });

    Route::get('/poliMetadone', function () {
        return view('pages.poliukp.poliMetadone');
    });

    Route::get('/poliCaten', function () {
        return view('pages.poliukp.poliCaten');
    });

    Route::get('/poliPsikologi', function () {
        return view('pages.poliukp.poliPsikologi');
    });

    Route::get('/poliUbm', function () {
        return view('pages.poliukp.poliUbm');
    });

    Route::get('/poliYankestrad', function () {
        return view('pages.poliukp.poliYankestrad');
    });

    Route::get('/poliSanitasi', function () {
        return view('pages.poliukp.poliSanitasi');
    });

    Route::get('/poliPkpr', function () {
        return view('pages.poliukp.poliPkpr');
    });

    Route::get('/poliBankeslap', function () {
        return view('pages.poliukp.poliBankeslap');
    });
});

Route::group(['prefix' => 'poliukm'], function()
{
    Route::get('/', function () {
        return view('pages.poliukm.indexUkm');
    });

    Route::get('/poliPromkes', function () {
        return view('pages.poliukm.poliPromkes');
    });

    Route::get('/poliKesling', function () {
        return view('pages.poliukm.poliKesling');
    });

    Route::get('/poliKesibu', function () {
        return view('pages.poliukm.poliKesibu');
    });

    Route::get('/poliUgizi', function () {
        return view('pages.poliukm.poliUgizi');
    });

    Route::get('/poliPpp', function () {
        return view('pages.poliukm.poliPpp');
    });

    Route::get('/poliKpldh', function () {
        return view('pages.poliukm.poliKpldh');
    });

    Route::get('/poliKesmas', function () {
        return view('pages.poliukm.poliKesmas');
    });

    Route::get('/poliKeswa', function () {
        return view('pages.poliukm.poliKeswa');
    });

    Route::get('/poliUkgm', function () {
        return view('pages.poliukm.poliUkgm');
    });

    Route::get('/poliKeslansia', function () {
        return view('pages.poliukm.poliKeslansia');
    });

    Route::get('/poliKesjaor', function () {
        return view('pages.poliukm.poliKesjaor');
    });

    Route::get('/poliKespkpr', function () {
        return view('pages.poliukm.poliKespkpr');
    });

    Route::get('/poliKtpa', function () {
        return view('pages.poliukm.poliKtpa');
    });

    Route::get('/poliBatra', function () {
        return view('pages.poliukm.poliBatra');
    });

    Route::get('/poliUks', function () {
        return view('pages.poliukm.poliUks');
    });
});

Route::group(['prefix' => 'polirujuk'], function()
{
    Route::get('/', function () {
        return view('pages.polirujuk.indexRujuk');
    });

    Route::get('/poliRujukan', function () {
        return view('pages.polirujuk.poliRujukan');
    });
});


/*
|--------------------------------------------------------------------------
| JEJARING
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'jejaring'], function()
{
    Route::get('/', function () {
        return view('pages.jejaring.indexJejaring');
    });
});

/*
|--------------------------------------------------------------------------
| PEGAWAI
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'pegawai'], function()
{
    Route::get('/', function () {
        return view('pages.pegawai.indexPegawai');
    });
});

/*
|--------------------------------------------------------------------------
| SIPATUH PENERAPAN
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'sipatuhpenerapan'], function()
{
    Route::get('/', function () {
        return view('pages.sipatuhpenerapan.indexPenerapan');
    });
});

/*
|--------------------------------------------------------------------------
|SIPATUH PEMANTAUAN
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'sipatuhpemantauan'], function()
{
    Route::get('/', function () {
        return view('pages.sipatuhpemantauan.indexPantau');
    });
});

/*
|--------------------------------------------------------------------------
|SIPATUH BINAAN
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'sipatuhpembinaan'], function()
{
    Route::get('/', function () {
        return view('pages.sipatuhpembinaan.indexBinaan');
    });
});


/*
|--------------------------------------------------------------------------
|SIPATUH PENGADUAN
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'sipatuhpengaduan'], function()
{
    Route::get('/', function () {
        return view('pages.sipatuhpengaduan.indexAduan');
    });
});


/*
|--------------------------------------------------------------------------
| GALLERY
|--------------------------------------------------------------------------
*/
Route::get('/gallery', 'GalleryController@index');

/*
|--------------------------------------------------------------------------
| PUSKESMAS
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'puskesmas'], function()
{
    Route::get('/bukit-duri', function () {
        return view('pages.puskesmas.bukit-duri');
    });

    Route::get('/manggarai', function () {
        return view('pages.puskesmas.manggarai');
    });

    Route::get('/kebon-baru', function () {
        return view('pages.puskesmas.kebon-baru');
    });

    Route::get('/tebet-barat', function () {
        return view('pages.puskesmas.tebet-barat');
    });

    Route::get('/manggarai-selatan', function () {
        return view('pages.puskesmas.manggarai-selatan');
    });

    Route::get('/menteng-dalam', function () {
        return view('pages.puskesmas.menteng-dalam');
    });
});

/*
|--------------------------------------------------------------------------
| KARIR
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'karir'], function()
{
    Route::get('/', 'KarirController@index');

    Route::get('/{slug}', 'KarirController@show');
});

/*
|--------------------------------------------------------------------------
| Kontak
|--------------------------------------------------------------------------
*/
Route::get('/kontak-kami', function () {
    return view('pages.kontak');
});

/*
|--------------------------------------------------------------------------
| Profil dan Laporan Tahunan
|--------------------------------------------------------------------------
*/
Route::get('/profil-tahunan-2024', function () {
    $filePath = public_path('files/profil-tahunan-2024.pdf');
    return response()->file($filePath);
});

Route::get('/laporan-tahunan-2024', function () {
    $filePath = public_path('files/laporan-tahunan-2024.pdf');
    return response()->file($filePath);
});
