<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Cloner\Data;

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

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/info', function () {
    return view('info');
})->name('info');

Route::get('/', function () {

    $data = [
        'name' => 'Carlo',
        'lastname' => 'Buffetti',
        'age' => 33,
        'sport' => [
            'calcio',
            'basket',
            'curling',
        ]
    ];

    return view('home', $data);
});
