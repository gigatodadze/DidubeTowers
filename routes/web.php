<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientInsertController;
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


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/', function () {
    return view('index');
});

//Route::get('/stud', function () {
//    return view('stud-create');
//});
//
//Route::get('postinsert', 'ClientInsertController@ajaxRequest');
//Route::post('postinsert', 'ClientInsertController@ajaxRequestPost');

Route::get('/client',[ClientInsertController::class,'index']);
