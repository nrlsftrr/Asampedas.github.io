<?php

use App\Http\Controllers\LivechatController;
use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\WhatsAppController as WAController;

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
    return view('admin/login');
});

Route::get('admin/login', [DashboardController::class, 'Login'])->name('admin/login');
Route::get('admin/register', [DashboardController::class, 'Register'])->name('admin/register');
Route::get('admin/dashboard', [DashboardController::class, 'Dashboard'])->name('admin/dashboard');
Route::get('livechat/whatsapp', [WAController::class, 'Whatsapp'])->name('livechat/whatsapp');
Auth::routes();



Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');