<?php

use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'beranda']);
Route::get('/kontak', [WebController::class, 'contact']);
Route::get('/blogs', [WebController::class, 'blogs']);
// Route::get('/', [WebController::class, 'beranda']);

require __DIR__.'/auth.php';
