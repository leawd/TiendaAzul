<?php

use App\Models\Phones;
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

Route::get('/', function () {
    $phones = Phones::get();
    return view('welcome', compact('phones'));
});

Auth::routes();

Route::prefix('purchasing-process')
    ->name('purchasing-process.')
    ->group(function () {
        // formulario de compra -----
        Route::get('checkout/{slug}', function ($slug) {
            $phone = Phones::where('slug', $slug)->first();
            return view('checkout.checkout', compact('phone'));
        });
    });
