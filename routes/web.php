<?php

use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'beranda']);

require __DIR__.'/auth.php';
