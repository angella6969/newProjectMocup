<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('content.home');
});
Route::get('/map', function () {
    return view('content.map');
});
Route::get('/pdf', function () {
    return view('content.pdf');
});
Route::get('/show-pdf', [PDFController::class,'showPDF'])->name('show.pdf');
