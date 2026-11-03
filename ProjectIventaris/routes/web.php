<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemController;

Route::get('/', function () {
    return view('welcome');
});

// route atau alamat untuk buka form
route::get('/items/create', [itemController::class, 'create']);

// route untuk memproses inputan form
route::post('/items',[itemController::class, 'store'])->name('items.store');


