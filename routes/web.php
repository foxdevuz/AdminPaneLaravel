<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DirectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['sessionadmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/mainPageNew', [AdminController::class, 'ap_showAll']);
    Route::get('/mainpagenews/delete', [AdminController::class, 'mainpagenews_destroy']);
    Route::get('/admin/addNews', [AdminController::class, 'addNews']);
    Route::get('/admin/allNews', [AdminController::class, 'showNews']);
    Route::get('/news/delete', [AdminController::class, 'destroyNews']);
});
Route::middleware(['sessionadmin'])->group(function () {
    Route::post('/mainPage', [AdminController::class, 'firstPageNews']);
    Route::post('/addNews', [AdminController::class, 'addNewsBackend']);
});

Route::get('/login', [AdminLoginController::class, 'login']);

Route::get('/breaking-news', [DirectionController::class, 'breakingNews']);
Route::get('/football-news', [DirectionController::class, 'footballNews']);

Route::group(['prefix' => 'club'], function () {
    Route::get('/news', [DirectionController::class, 'clubNews']);
    Route::get('/type/{type}', [DirectionController::class, 'u11']);
    Route::get('/history', [DirectionController::class, 'clubHistory']);
    Route::get('/liders', [DirectionController::class, 'lider']);
    Route::get('/doctors', [DirectionController::class, 'doctors']);
    Route::get('/coachs', [DirectionController::class, 'coach']);
});

Route::get('/contact', [DirectionController::class, 'contact']);

Route::post('/login', [AdminLoginController::class, 'loginSession']);
