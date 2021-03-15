<?php

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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('billing', [\App\Http\Controllers\BillingController::class, 'index'])
        ->name('billing.index');
    Route::get('checkout/{plan_id}', [\App\Http\Controllers\CheckoutController::class, 'checkout'])
        ->name('checkout');
});


require __DIR__.'/auth.php';
