<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\HomeController;
use App\Controllers\DataSiswaController;
use App\Controllers\DataGuruPegawaiController;
use App\Controllers\RiwayatAdministrasiController;
use App\Controllers\NilaiController;
use App\Controllers\KemajuanBelajarController;
use App\Controllers\JadwalController;
use App\Controllers\UserController;
use App\Controllers\EraportController;
use App\Controllers\InformasipublikController;
use App\Controllers\RankingController;
use Config\Auth;

/**
 * @var RouteCollection $routes
 */

 
$routes->get('/auth', [HomeController::class, 'auth']);

$routes->get('/', [InformasipublikController::class,'index']);
$routes->post('/informasipublik/sejarahsingkat/store', [InformasipublikController::class, 'storeSejarah'], ['filter' => 'role:admin, waka']);
$routes->post('/informasipublik/sejarahsingkat/update/(:any)', [InformasipublikController::class, 'updateSejarah'], ['filter' => 'role:admin, waka']);
$routes->get('/informasipublik/sejarahsingkat/delete/(:any)', [InformasipublikController::class,'deleteSejarah'], ['filter' => 'role:admin, waka']);

$routes->get('/informasipublik/galerikegiatan/semuagaleri', [InformasipublikController::class, 'semuaGaleri']);
$routes->post('/informasipublik/galerikegiatan/semuagaleri/store', [InformasipublikController::class, 'storeGaleri'], ['filter' => 'role:admin, waka']);
$routes->post('/informasipublik/galerikegiatan/semuagaleri/update/(:any)', [InformasipublikController::class, 'updateKegiatan'], ['filter' => 'role:admin, waka']);
$routes->get('/informasipublik/galerikegiatan/semuagaleri/delete/(:any)', [InformasipublikController::class,'deleteKegiatan'], ['filter' => 'role:admin, waka']);

$routes->get('informasipublik/prestasi/semuaprestasi', [InformasipublikController::class, 'semuaPrestasi']);
$routes->post('/informasipublik/prestasi/semuaprestasi/store', [InformasipublikController::class, 'storePrestasi'], ['filter' => 'role:admin, waka']);
$routes->post('/informasipublik/prestasi/semuaprestasi/update/(:any)', [InformasipublikController::class, 'updatePrestasi'], ['filter' => 'role:admin, waka']);
$routes->get('/informasipublik/prestasi/semuaprestasi/delete/(:any)', [InformasipublikController::class,'deletePrestasi'], ['filter' => 'role:admin, waka']);

$routes->post('/informasipublik/ekstrakurikuler/store', [InformasipublikController::class, 'storeEkstrakurikuler'], ['filter' => 'role:admin, waka']);
$routes->post('/informasipublik/ekstrakurikuler/update/(:any)', [InformasipublikController::class, 'updateEkstrakurikuler'], ['filter' => 'role:admin, waka']);
$routes->get('/informasipublik/ekstrakurikuler/delete/(:any)', [InformasipublikController::class,'deleteEkstrakurikuler'], ['filter' => 'role:admin, waka']);

//

$routes->get('/ranking7', [RankingController::class, 'index7'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->get('/ranking8', [RankingController::class, 'index8'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->get('/ranking9', [RankingController::class, 'index9'], ['filter' => 'role:admin, guru, siswa, waka']);

//

$routes->get('/eraport', [EraportController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->post('/eraport', [EraportController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->get('/eraport/detail/(:any)/(:any)/(:any)', [EraportController::class, 'getDetail'], ['filter' => 'role:admin, guru, siswa, waka']);


$routes->get('/datasiswa', [DataSiswaController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->post('/datasiswa', [DataSiswaController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->post('/datasiswa/store', [DataSiswaController::class, 'tambah'], ['filter' => 'role:admin, waka']);
$routes->get('/datasiswa/delete/(:any)', [DataSiswaController::class, 'delete'], ['filter' => 'role:admin, waka']);
$routes->post('/datasiswa/update/(:any)', [DataSiswaController::class, 'update'], ['filter' => 'role:admin, waka']);


$routes->get('/datagurupegawai', [DataGuruPegawaiController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->post('/datagurupegawai/guru/store', [DataGuruPegawaiController::class, 'tambahGuru'], ['filter' => 'role:admin, waka']);
$routes->post('/datagurupegawai/guru/update/(:any)', [DataGuruPegawaiController::class, 'updateGuru'], ['filter' => 'role:admin, waka']);
$routes->get('/datagurupegawai/guru/delete/(:any)', [DataGuruPegawaiController::class, 'deleteGuru'], ['filter' => 'role:admin, waka']);
$routes->post('/datagurupegawai/pegawai/store', [DataGuruPegawaiController::class, 'tambahPegawai'], ['filter' => 'role:admin, waka']);
$routes->post('/datagurupegawai/pegawai/update/(:any)', [DataGuruPegawaiController::class, 'updatePegawai'], ['filter' => 'role:admin, waka']);
$routes->get('/datagurupegawai/pegawai/delete/(:any)', [DataGuruPegawaiController::class, 'deletePegawai'], ['filter' => 'role:admin, waka']);


$routes->get('/jadwalmapel', [JadwalController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->get('/jadwalmapel/detail/(:any)', [JadwalController::class, 'getDetail'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->post('/jadwalmapel/store', [JadwalController::class, 'tambah'], ['filter' => 'role:admin, waka']);
$routes->post('/jadwalmapel/update/(:any)', [JadwalController::class, 'update'], ['filter' => 'role:admin, waka']);
$routes->get('/jadwalmapel/delete/(:any)', [JadwalController::class, 'delete'], ['filter' => 'role:admin, waka']);


$routes->get('/riwayatadministrasi', [RiwayatAdministrasiController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->post('/riwayatadministrasi', [RiwayatAdministrasiController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->get('/riwayatadministrasi/detail/(:any)', [RiwayatAdministrasiController::class, 'getDetail'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->post('/riwayatadministrasi/store', [RiwayatAdministrasiController::class, 'tambah'], ['filter' => 'role:admin, waka']);
$routes->post('/riwayatadministrasi/update/(:any)', [RiwayatAdministrasiController::class, 'update'], ['filter' => 'role:admin, waka']);
$routes->get('/riwayatadministrasi/delete/(:any)', [RiwayatAdministrasiController::class, 'delete'], ['filter' => 'role:admin, waka']);


$routes->get('/nilai', [NilaiController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->post('/nilai', [NilaiController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->get('/nilai/detail/(:any)/(:any)/(:any)', [NilaiController::class, 'getDetail'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->get('/nilai/store', [NilaiController::class, 'tambah'], ['filter' => 'role:admin, guru, waka']);
$routes->post('/nilai/update/(:any)', [NilaiController::class, 'update'], ['filter' => 'role:admin, guru, waka']);
$routes->get('/nilai/delete/(:any)', [NilaiController::class, 'delete'], ['filter' => 'role:admin, guru, waka']);
$routes->get('/nilai/bukapenilaian', [NilaiController::class, 'updateStatus'], ['filter' => 'role:waka']);
$routes->get('/nilai/tutuppenilaian', [NilaiController::class, 'updateStatusTutup'], ['filter' => 'role:waka']);

$routes->get('/kemajuanbelajar', [KemajuanBelajarController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->post('/kemajuanbelajar', [KemajuanBelajarController::class, 'index'], ['filter' => 'role:admin, guru, siswa, waka']);
$routes->get('/kemajuanbelajar/detail/(:any)', [KemajuanBelajarController::class, 'getDetail'], ['filter' => 'role:admin, guru, siswa, waka']);


$routes->get('/manajemenakun', [UserController::class, 'index'], ['filter' => 'role:admin, waka']);
$routes->post('/manajemenakun', [UserController::class, 'index'], ['filter' => 'role:admin, waka']);
$routes->post('/manajemenakun/store', [UserController::class, 'tambah'], ['filter' => 'role:admin, waka']);
$routes->get('/manajemenakun/delete/(:any)', [UserController::class, 'delete'], ['filter' => 'role:admin, waka']);
$routes->post('/manajemenakun/update/(:any)', [UserController::class, 'update'], ['filter' => 'role:admin, waka']);
$routes->post('/manajemenakun/aktivasi/(:any)', [UserController::class, 'aktivasi'], ['filter' => 'role:admin, waka']);



$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(Auth::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});