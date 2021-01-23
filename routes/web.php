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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('admin.blank.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/addPost', function () {
    return view('admin.blogs.create');
})->middleware(['auth'])->name('addPost');

Route::get('/visi&misi', function () {
    return view('admin.vimi.index');
})->middleware(['auth'])->name('visimisi');

Route::get('/banner', function () {
    return view('admin.banners.index');
})->middleware(['auth'])->name('banner');

Route::get('/struktur', function () {
    return view('admin.so.index');
})->middleware(['auth'])->name('struktur');

Route::get('/profile', function () {
    return view('admin.profile.index');
})->middleware(['auth'])->name('profile');


require __DIR__.'/auth.php';
