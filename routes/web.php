<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;

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

// my routes

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/about', function () {
   return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('client/add', function() {
    DB::table('clients')->insert([
       'name' => 'Rakhat',
        'lastname' => 'Alpysbai',
        'age' => 19
    ]);
});

Route::get('client', function() {
    return Client::find(1);
});
