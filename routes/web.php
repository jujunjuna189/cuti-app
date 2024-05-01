<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
Route::post('/on-login', [App\Http\Controllers\Auth\AuthController::class, 'onLogin'])->name('on-login');
Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register');
Route::post('/on-register', [App\Http\Controllers\Auth\AuthController::class, 'onRegister'])->name('on-register');
Route::get('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

Route::prefix('board')->group(function () {
    Route::get('/', [App\Http\Controllers\Board\BoardController::class, 'index'])->name('board')->middleware('auth');
});
Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\User\UserController::class, 'index'])->name('user')->middleware('auth');
    Route::get('/create', [App\Http\Controllers\User\UserController::class, 'create'])->name('user-create')->middleware('auth');
    Route::post('/create/store', [App\Http\Controllers\User\UserController::class, 'store'])->name('user-store')->middleware('auth');
    Route::get('/update', [App\Http\Controllers\User\UserController::class, 'update'])->name('user-update')->middleware('auth');
    Route::post('/update/store', [App\Http\Controllers\User\UserController::class, 'update_store'])->name('user-update-store')->middleware('auth');
    Route::get('/delete', [App\Http\Controllers\User\UserController::class, 'delete'])->name('user-delete')->middleware('auth');
});
Route::prefix('master')->group(function () {
    Route::prefix('type')->group(function () {
        Route::get('/', [App\Http\Controllers\Master\TypeController::class, 'index'])->name('type')->middleware('auth');
        Route::get('/create', [App\Http\Controllers\Master\TypeController::class, 'create'])->name('type-create')->middleware('auth');
        Route::post('/store', [App\Http\Controllers\Master\TypeController::class, 'store'])->name('type-store')->middleware('auth');
        Route::get('/update', [App\Http\Controllers\Master\TypeController::class, 'update'])->name('type-update')->middleware('auth');
        Route::post('/update/store', [App\Http\Controllers\Master\TypeController::class, 'update_store'])->name('type-update-store')->middleware('auth');
        Route::get('/delete', [App\Http\Controllers\Master\TypeController::class, 'delete'])->name('type-delete')->middleware('auth');
    });
    Route::prefix('reason')->group(function () {
        Route::get('/', [App\Http\Controllers\Master\ReasonController::class, 'index'])->name('reason')->middleware('auth');
        Route::get('/get-by-jenis', [App\Http\Controllers\Master\ReasonController::class, 'getByType'])->name('reason-get-by-jenis')->middleware('auth');
        Route::get('/create', [App\Http\Controllers\Master\ReasonController::class, 'create'])->name('reason-create')->middleware('auth');
        Route::post('/store', [App\Http\Controllers\Master\ReasonController::class, 'store'])->name('reason-store')->middleware('auth');
        Route::get('/update', [App\Http\Controllers\Master\ReasonController::class, 'update'])->name('reason-update')->middleware('auth');
        Route::post('/update-store', [App\Http\Controllers\Master\ReasonController::class, 'update_store'])->name('reason-update-store')->middleware('auth');
        Route::get('/delete', [App\Http\Controllers\Master\ReasonController::class, 'delete'])->name('reason-delete')->middleware('auth');
    });
});
Route::prefix('absense')->group(function () {
    Route::get('/', [App\Http\Controllers\Absense\AbsenseController::class, 'index'])->name('absense')->middleware('auth');
    Route::get('/atasan', [App\Http\Controllers\Absense\AbsenseController::class, 'indexAtasan'])->name('absense-atasan')->middleware('auth');
    Route::prefix('form')->group(function () {
        Route::get('/', [App\Http\Controllers\Absense\AbsenseFormController::class, 'index'])->name('absense-form')->middleware('auth');
        Route::post('/store', [App\Http\Controllers\Absense\AbsenseFormController::class, 'store'])->name('absense-form-store')->middleware('auth');
        Route::get('/update-store', [App\Http\Controllers\Absense\AbsenseFormController::class, 'update_store'])->name('absense-form-update-store')->middleware('auth');
    });
    Route::prefix('history')->group(function () {
        Route::get('/', [App\Http\Controllers\AbsenseHistory\AbsenseHistoryController::class, 'index'])->name('absense-history')->middleware('auth');
        Route::get('/atasan', [App\Http\Controllers\AbsenseHistory\AbsenseHistoryController::class, 'indexAtasan'])->name('absense-history-atasan')->middleware('auth');
    });
});
