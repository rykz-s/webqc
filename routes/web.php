<?php

use App\Http\Controllers\KankenController;
use App\Models\Kanken;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/test-room', function () {
    return view('/test-room/index');
});

Route::get('/test-room/kansa-kensa', [KankenController::class, 'index'])->name('kankenindex');
Route::get('/test-room/kansa-kensa/create', [KankenController::class, 'create']);
Route::post('/test-room/kansa-kensa/create', [KankenController::class, 'store']);
