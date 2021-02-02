<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\{Vimi, Post};
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function beranda()
    {
        return view('web.beranda',[
            'visimisi' => Vimi::all(),
            'posts' => Post::latest()->paginate(12)
        ]);
    }
}
