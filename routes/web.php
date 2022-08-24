<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
Route::get('/', [PageController::class, 'index']);
Route::post('/bukutamu/create', [PageController::class, 'index']);

Route::get('/bukutamu/{bukutamu}/edit', [PageController::class, 'edit']);
Route::put('/bukutamu/{bukutamu}', [PageController::class, 'update']);

Route::controller(PageController::class)->prefix('bukutamu')->name('bukutamu.')->group(function () {
    Route::post('/create', 'store')->name('store');
    //Route::post('/update/{bukutamu}', 'update')->name('update');
    Route::post('/delete/{bukutamu}', 'destroy')->name('destroy');
});

// Route::get('/', function () {
//     return view('main');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
