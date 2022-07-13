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

Route::get('/', 'PerpusController@home');
Route::get('/databuku', 'PerpusController@databuku');
Route::get('/daftarbuku', 'PerpusController@daftarbuku');
Route::get('/datapeminjam', 'PerpusController@datapeminjam');
Route::get('/daftarpeminjam', 'PerpusController@daftarpeminjam');
Route::post('/createdatabuku', 'PerpusController@createDataBuku');
Route::get('/editdatabuku/{id}', 'PerpusController@editdatabuku');
Route::patch('/updatebuku/{id}', 'PerpusController@updatebuku');
Route::delete('/deletebuku/{id}', 'PerpusController@deletebuku');
Route::post('/createpinjam', 'PinjamController@createpinjam');
Route::get('/daftarpeminjam', 'PinjamController@peminjam');
Route::get('/editpeminjam/{id}', 'PinjamController@edit');
Route::patch('updatepeminjam/{id}', 'PinjamController@updatepeminjam');
Route::delete('/deletepeminjam/{id}', 'PinjamController@deletepeminjam');
Route::get('/ketentuan', 'PerpusController@ketentuanP');