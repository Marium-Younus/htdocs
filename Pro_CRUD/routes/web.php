<?php

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
/*Route::get('/index', function () {
    return view('Admin/index');
});
Route::get('/insertemp', function () {
    return view('Admin/create');
});*/

Route::resource('r_admin', 'AdminController');