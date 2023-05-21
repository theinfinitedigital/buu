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
Route::get('/folder', [App\Http\Controllers\FolderController::class, 'folder'])->name('folder');
Route::get('/data-services', [App\Http\Controllers\DataServicesController::class, 'blogs'])->name('blogs');
Route::get('/dataservices-detail', [App\Http\Controllers\DataServicesDetailController::class, 'detailblogs'])->name('detailblogs');
Route::get('/aboutus', [App\Http\Controllers\AboutUsController::class, 'aboutus'])->name('aboutus');
Route::get('/contectus', [App\Http\Controllers\ContectUsController::class, 'contectus'])->name('contectus');
