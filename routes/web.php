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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('example',function () {
   ray('hello world');
});

Route::statamic('/account/registro', 'user.register-wizard', ['title' => 'Regístrate'])->name('user.register');

Route::get('form-maker',function () {
    return view('maker-forms.form-button-sic');
})->name('form-maker.index');