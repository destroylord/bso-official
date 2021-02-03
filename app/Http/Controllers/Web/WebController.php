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
    public function contact()
    {
        return view('web.contact');
    }

    public function blogs()
    {
        return view('web.blogs', [
            'posts' => Post::all()
        ]);
    }
    public function detailBlogs()
    {
        return view('web.detail-blog');
    }
}
