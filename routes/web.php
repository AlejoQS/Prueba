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
    return view('Welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/Vendedor/viewCrearVendedor','UserController@create');

Route::get('/Vendedor/viewConsultarVendedor','UserController@show');

Route::resource('usuario', 'UserController');

Auth::routes();
Route::resource('cliente', 'ClientsController');

Route::get('/Vendedor/viewCrearCliente','ClientsController@create');

Route::get('/Vendedor/viewConsultarCliente','ClientsController@index');

