<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeskController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('desk', function () {
    return view('pages.plp');
})->name('plp');

Route::get('/desk/{i}', function () {
    return view('pages.pdp');
})->name('pdp');
