<?php

use App\Http\Controllers\PostWriteController;
use App\Http\Controllers\PostViewController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
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
    return view('main');
});
Route::get('/', [PostViewController::class, 'postview']);
Route::get('/admin', function () {
    return view('adminpanel');
});
Route::post('/admin/submit', [PostWriteController::class, 'submit'])->name('post-form');

Route::get('/image', function () {
    return view('imageUpload');
});
Route::post('/image/add', [ImageController::class,'upload'])->name('image.add');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
