<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::redirect('/','/dashboard/index');
Route::any('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::group(['middleware' => ['auth'],'prefix'=>'dashboard'], function () {
    Route::get('index', [DashboardController::class, 'dashboard'])->name('dashboard.index');

    Route::group(['prefix'=>'vendor'], function () {
        Route::any('list', [DashboardController::class, 'vendors'])->name('vendor.list.all');
        Route::any('edit/{id}', [DashboardController::class, 'vendor_edit'])->name('vendor.edit');
        Route::any('approve/{id}', [DashboardController::class, 'approve_vendor'])->name('vendor.approve');
        Route::any('reject/{id}', [DashboardController::class, 'reject_vendor'])->name('vendor.reject');
    });




    Route::group(['prefix'=>'users'], function () {
        Route::any('root', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.list.all');
        Route::any('root/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('user.create');
        Route::any('root/{id}', [\App\Http\Controllers\Admin\UserController::class, 'vendor_edit'])->name('user.edit');
    });

    Route::any('logout', [LoginController::class, 'logout'])->name('logout');
});



Route::group(['prefix'=>'vendor'], function () {
    Route::any('register', [\App\Http\Controllers\VendorController::class, 'register'])->name('vendor.register');
});



