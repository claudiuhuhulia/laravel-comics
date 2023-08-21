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

Route::get('/serie/{index}', function ($index) {
    $series = config('series');
    $serie = $series[$index];
    $artists = implode(',', $serie['artists']);
    $writers = implode(',', $serie['writers']);
    return view('serie', compact('series', 'serie', 'artists', 'writers'));
});
