<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\ObjectItemController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');

Route::post('/login/admin', [LoginController::class, 'adminLogin'])->name('admin.login');
Route::post('/register/admin', [RegisterController::class, 'createAdmin'])->name('admin.register');;
//Route::view('/tt', 'dashboard')->middleware('auth:admin');

Route::middleware(['auth:admin'])->group(function (){
    Route::view('/dashboard', 'dashboard')->name("dashboard");

    Route::get('/user', [UsersController::class, 'index'])->name('users-view');
    //Route::post('/user', [UsersController::class, 'Filter'])->name('usersFilter');
    Route::post('/user', [AdminController::class, 'store'])->name('newAdmin');

    Route::view('/order', 'coming')->name("order-view");
    Route::view('/vip', 'coming')->name("vip-view");
    Route::view('admin/object', 'coming')->name("object-view");

});


// Routes for the Item model




Route::get('/logout/admin', function () {
    auth()->guard('admin')->logout();
    return redirect('/');
})->name('logout.admin');
