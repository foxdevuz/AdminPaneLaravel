<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DirectionController;
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
    return view('welcome');
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('sessionadmin');
Route::get('/login', [AdminLoginController::class, 'login']);
//  directions
Route::get('/breaking-news', [DirectionController::class, 'breakingNews']);
Route::get('/football-news', [DirectionController::class, 'footballNews']);
Route::get('/club/news', [DirectionController::class, 'clubNews']);
Route::get('/club/type/{type}', [DirectionController::class, 'u11']);
Route::get('/club/history', [DirectionController::class, 'clubHistory']);
Route::get('/contact', [DirectionController::class, 'contact']);
Route::get('/club/liders', [DirectionController::class, 'lider']);
Route::get('/club/doctors', [DirectionController::class, 'doctors']);
Route::get('/club/coachs', [DirectionController::class, 'coach']);
// post methods
Route::post('/login', [AdminLoginController::class, 'loginSession']);

# Admin Panel Store Methods
Route::post('/mainPage', [AdminController::class, 'firstPageNews'])->middleware('sessionadmin');
