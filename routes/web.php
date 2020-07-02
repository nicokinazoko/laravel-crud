<?php

use App\Http\Controllers\questionControler;
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
    return view('welcome');
});

Route::get('/pertanyaan', 'questionControler@index');
Route::get('/pertanyaan/create', 'questionControler@create');
Route::post('/pertanyaan','questionControler@store');

Route::get('/jawaban/{id}', 'answerController@index')->name('jawaban.index');
Route::post('/jawaban/{id}', 'answerController@store')->name('jawaban.store');

