<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\CategoryStructure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function create()
    {
        return view('admin.so.index', [
            'category_structures' => CategoryStructure::all()
        ]);
    }
    
    public function store(Request $request)
    {
        
    }
}
