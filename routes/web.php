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
Route::get('/login', function(){
    return view('customer.login');
});
Route::get('/register', function(){
    return view('customer.register');
});
Route::post('/login', 'Customer\AuthenticaController@checkLogin');
Route::get('/home', function () {
    return view('index');
});
Route::get('/logout','Customer\AuthenticaController@logout');
Route::post('/register', 'Customer\AuthenticaController@register');


Route::prefix('admin')->group(function () {
    Route::resource('tickets', "Resources\TicketController");
});
