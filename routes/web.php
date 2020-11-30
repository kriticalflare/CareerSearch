<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobsController;
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

Route::get('/', [JobsController::class, 'listings']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::delete('/dashboard/{job}', [DashboardController::class, 'delete_listing'])->name('dashboard.delete');

Route::get('/jobs/{jobDetail}', [JobsController::class, 'view_details'])->name('details');

Route::get('/create', [JobsController::class, 'create_index'])->name('create');

Route::post('/create', [JobsController::class, 'create_listing']);