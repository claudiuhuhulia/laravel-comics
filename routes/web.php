<?php

use Illuminate\Support\Facades\Route;

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
    $series = config('series');
    return view('index', compact('series'));
});

Route::get('/serie', function () {
    $series = config('series');
    $serie = $series[0];
    return view('serie', compact('series', 'serie'));
});
