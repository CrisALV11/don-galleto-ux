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

Route::get('/', function ()
{
    return view('inicio');
});

Route::get('/dashboard', function ()
{
    return view('auth.dashboard');
});

Route::get('/inventariogalletas', function ()
{
    return view('auth.igalletas');
});

Route::get('/inventarioinsumos', function ()
{
    return view('auth.insumos');
});

Route::get('/ventas', function ()
{
    return view('auth.ventas');
});
