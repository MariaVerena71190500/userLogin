<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{authController, adminPasswordController,userController,anggotaController};

Route::get('/',[authController::class,'getLogin'])->name('getLogin');
Route::post('/',[authController::class,'postLogin'])->name('postLogin');

Route::get('/', function () {
    return view('admin.login');
})->name('getLogout');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/super', [adminPasswordController::class, 'index'])->name('index.admin');
    Route::get('/admin/super/form', [adminPasswordController::class, 'add'])->name('add.super');
    Route::post('/admin/super/save', [adminPasswordController::class, 'save'])->name('save.super');

    Route::get('/super/edit/{id}', [adminPasswordController::class, 'edit'])->name('edit.super');
    Route::post('/super/update', [adminPasswordController::class, 'update'])->name('update.super');
});

Route::group(['middleware' => ['role:user']], function () {
    Route::get('/index/user', [userController::class, 'index'])->name('index.user');
});

Route::group(['middleware' => ['role:anggota']], function () {
    Route::get('/index/anggota', [anggotaController::class, 'index'])->name('index.anggota');

});

Route::get('/admin/logout',[authController::class,'logout'])->name('logout');