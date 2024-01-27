<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
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

Route::get('/loginAdmin', function () {
    return view('layouts.master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboardToko', function () {
    return view('dashboard-toko');
});

Route::get('/dashboardUser', function () {
    return view('dashboard-user');
});

Route::get('toko', [TokoController::class, 'index'])->name('toko.index');
Route::get('toko-create', [TokoController::class, 'create'])->name('toko.create');
// Route::resource('toko', TokoController::class);
Route::post('toko-store', [TokoController::class, 'store'])->name('toko.store');
