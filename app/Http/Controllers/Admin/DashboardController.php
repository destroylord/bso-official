<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\StructureOrganization;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('admin.blank.index',[
            'blog' => Post::all(),
            'count_post' => Post::count(),
            'count_orgz' => StructureOrganization::count()
        ]);
    }
    public function destroy()
    {
        
    }
}
