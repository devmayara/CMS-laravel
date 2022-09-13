<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;
use App\Http\Controllers\Admin;

Route::get('/', [Site\HomeController::class, 'index']);

Route::prefix('painel')->group(function(){
    Route::get('/', [Admin\HomeController::class, 'index'])->name('admin');
    Route::get('login', [Admin\Auth\LoginController::class, 'index'])->name('login');
});
