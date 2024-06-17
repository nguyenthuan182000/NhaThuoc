<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Modal\ShowModalController;

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
    return view('frontend/layouts/main-layout');
});

Route::prefix('modal')->group(function () {
    Route::get('/show-login', [ShowModalController::class, 'showLogin'])->name('Modal.showLogin');
});