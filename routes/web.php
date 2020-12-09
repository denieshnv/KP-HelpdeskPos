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
    return view('auth/login');
});

Route::get('/register','AuthController@register');
Route::post('/postregister','AuthController@postregister');
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

// Route halaman form
Route::get('/masalahform','FormController@masalahform')->middleware('auth');
// Akhir route halaman form

// Route view masalah
Route::get('/viewmasalah','FormController@viewmasalah')->middleware('auth');
//Akhir route view masalah

//Route view query
Route::get('/viewquery','FormController@viewquery')->middleware('auth');
//Akhir view query

//Route detail masalah
Route::get('/detailmasalah/{id_masalah}','FormController@detailmasalah')->middleware('auth');
//Akhir detail masalah

//Route edit masalah
Route::get('/edit/{id_masalah}','FormController@edit')->middleware('auth');

//Route hasil
Route::get('/result','FormController@result')->middleware('auth');

Route::get('/dashboard','AdminController@dashboard')->middleware('auth');