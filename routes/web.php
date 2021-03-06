<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::get('/send-email', [\App\Http\Controllers\MailController::class, 'sendEmail']);

Route::get('/post', [BlogController::class, 'index']);
Route::get('post/create', function() {
    return view('blog.create');
});
Route::post('post/create', [BlogController::class, 'store'])->name('add-post');

Route::get('post/{id}', [BlogController::class, 'get_post']);

Route::get('/users', [UserController::class, 'index']);
Route::get('users/create', function() {
    return view('user.create');
});

Route::post('users/create', [UserController::class, 'store'])->name('add-user');

Route::get('/{lang?}', function ($lang) {
    App::setLocale($lang);
    return view('index');
})->name('/');

