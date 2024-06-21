<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeskController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/desk', function () {
    return view('pages.plp');
})->name('plp');
Route::get('/desk/{i}', function () {
    return view('pages.pdp');
})->name('pdp');
Route::get('/login', function () {
    return view('pages.login');
})->name('show_login');


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::prefix('desk')->group(function () {
        Route::post('/', function () {
            return view('pages.admin.desk.index');
        });
        Route::post('/add', function () {
            return view('pages.admin.desk.add');
        });
        Route::post('/edit/{id}', [DeskController::class, 'form_update']);
    });
});