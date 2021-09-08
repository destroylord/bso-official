<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\CategoryStructure;
use Illuminate\Http\Request;
use App\Http\Requests\StructureRequest;
use App\Models\StructureOrganization;


class StructureController extends Controller
{
    public function index()
    {
        $getStructure = StructureOrganization::all();
        // dd($getStructure);
        return view('admin.so.index', compact('getStructure'));
    }

    public function create()
    {
        return view('admin.so.create', [
            'category_structures' => CategoryStructure::all()
        ]);
    }

    public function store(StructureRequest $request)
    {
        $attr = $request->all();


        $files = $request->file('images');
        $imgName = time(). '.' . $request->images->extension();
        $path = $files->storeAs('structure', $imgName);

        $attr['images'] = $path;

        StructureOrganization::create($attr);

        return back();
    }
}
