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

// Route::get('/series', function () {
//     $series_array = config('comics');
//     dd($series_array);

//     $data = [
//         $series_array
//     ];

//     return view('series', $data);
// })->name('series');