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
Route::get('/pagina-1', function () {
    return view('pagina-1');
})-> name("pagina-1");
Route::get('/pagina-2', function () {
    return view('pagina-2');
})->name("pagina-2");
