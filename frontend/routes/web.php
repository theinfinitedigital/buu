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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/storages', function () {
    return view('frontend.storages');
});

Route::get('/folder', function () {
    return view('frontend.folder');
});

Route::get('/associatelink', function () {
    return view('frontend.associatelink');
});

Route::get('/data-services', function () {
    return view('frontend.blogs');
});

Route::get('/dataservices-detail', function () {
    return view('frontend.detailblogs.detailblogs');
});

Route::get('/categories', function () {
    return view('frontend.categories');
});

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});

Route::get('/contectus', function () {
    return view('frontend.contectus');
});
