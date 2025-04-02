<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('/main');
});
Route::get('/about', function () {
    echo 'About us';
});

Route::get('/main', [MainController::class,'index']);
Route::get('page2', [MainController::class,'page2']);
