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
    $data = [
        'series_array' => config('comics')
    ];

    return view('comics-page', $data);
})->name('comics-page');

Route::get('/series/{id}', function ($id) {
    $series_array = config('comics');
    $current_series = [];

    foreach($series_array as $item) {
        if($item['id'] == $id) {
            $current_series = $item;
        }
    }

    $data = [
        'current_series' => $current_series,
    ];

    return view('series-info', $data);
})->name('series_info');