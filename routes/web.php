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

Route::get('/', function () {
    return view('home');
});



Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('list', 'ListController@list')->name('list');
Route::get('ulasan', 'UlasanController@ulasan');
Route::get('pesan/{id}','PesanController@index');
Route::post('pesan/{id}','PesanController@pesan');
Route::get('checkout','PesanController@checkout');
Route::delete('check-out/{id}', 'PesanController@delete');
Route::get('konfirmasi-checkout', 'PesanController@konfirmasi');
Route::get('profil','ProfilController@index');
Route::post('profil','ProfilController@update');
Route::get('history','HistoryController@index');
Route::get('history/{id}','HistoryController@detail');
Route::get('about','AboutController@about');