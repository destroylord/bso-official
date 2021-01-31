<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('web.beranda');
});

require __DIR__.'/auth.php';
