<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\DBDichController;
use App\Http\Controllers\CrawlerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Upload\UploadController;
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

//frontend router
Route::get('/', [HomeController:: class, 'index']);
Route::get('/dien-bien-dich', [HomeController:: class, 'dienbiendich']);
Route::get('/tin-tuc', [HomeController:: class, 'tintuc']);
Route::get('/tin-tuc/chi-tiet/290012323-{id}', [HomeController:: class, 'laytin']);





//crawl
Route::get('/crawler', [CrawlerController:: class, 'index']);



//login router
Route::get('/admin/login', [LoginController:: class, 'index'])->name('login');
Route::get('/admin/logout', [LoginController:: class, 'logout']);

Route::post('/admin/login/store', [LoginController:: class, 'store']);




Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('home', [AdminController:: class, 'index']);

    //router news
    Route::get('news/create', [NewsController:: class, 'create']);
    Route::POST('news/create', [NewsController:: class, 'store']);
    Route::get('news/show', [NewsController:: class, 'show']);
    Route::get('news/edit/{id}', [NewsController:: class, 'edit']);
    Route::post('news/edit/{id}', [NewsController:: class, 'update']);
    Route::DELETE('news/destroy', [NewsController::class, 'destroy']);

    //router dienbiendich
    Route::get('dienbien/create', [DBDichController:: class, 'create']);
    Route::POST('dienbien/create', [DBDichController:: class, 'store']);
    Route::get('dienbien/show', [DBDichController:: class, 'show']);
    Route::get('dienbien/edit/{id}', [DBDichController:: class, 'edit']);
    Route::post('dienbien/edit/{id}', [DBDichController:: class, 'update']);
    Route::DELETE('dienbien/destroy', [DBDichController::class, 'destroy']);


    //rouer upload
    Route::POST('/upload/services', [UploadController:: class, 'index']);

    
});