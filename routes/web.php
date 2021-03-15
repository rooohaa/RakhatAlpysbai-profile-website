<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;
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

Route::get('post/create', function () {
   DB::table('post')->insert([
       'title' => 'Test',
       'body' => 'Some body text...'
   ]);
});

Route::get('/post', [BlogController::class, 'index']);
