<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
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

Route::domain(Config::get('app.url'))->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Auth::routes([
            'login'    => true,
            'logout'   => true,
            'register' => true,
            'reset'    => true,   // for resetting passwords
            'confirm'  => true,  // for additional password confirmations
            'verify'   => true,  // for email verification
        ]);
    });

    Route::middleware('verified')->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });

    Route::get("/", function() {
        return view("arquito.index");
    });
});
