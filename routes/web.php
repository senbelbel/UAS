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
    return view('welcome');
});

#Route::get('/mhs', function () {
#    return view('mhs');
#});

Route::get('/mhs', 'MhsController@mhs');

Route::get('/mhs/cari', 'MhsController@search');

Route::get('/mhs/editmhs/{$id}', 'MhsController@editmhs');

Route::get('/mhs/formulirmhs', 'MhsController@formulirmhs');

Route::post('/mhs/simpanmhs', 'MhsController@simpanmhs');

Route::put('/mhs/updatemhs/{$id}', 'MhsController@updatemhs');

Route::put('/mhs/hapusmhs/{$id}', 'MhsController@hapusmhs');

Route::get('/user', 'AuthController@user');

Route::get('/user/tambah', 'AuthController@tambah');

Route::post('/user/simpanuser', 'AuthController@simpanuser');

Route::get('/user/edituser/{$id}', 'AuthController@edituser');

Route::get('/user/hapususer/{$id}', 'AuthController@hapususer');

Route::get('/login', 'AuthController@login');

Route::post('/user/ceklogin', 'AuthController@ceklogin');

Route::get('/logout', 'AuthController@logout');
