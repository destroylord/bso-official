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
        return view('admin.so.index');
    }

    public function create()
    {
        return view('admin.so.create', [
            'category_structures' => CategoryStructure::all()
        ]);
    }

    public function store(StructureRequest $request)
    {
        $imgName = time(). '.' . $request->images->extension();
        $path = $request->images->storeAs('structure/images', $imgName);

        $attr = $request->all();
        $attr['images'] = $path;

        StructureOrganization::create($attr);

        return back();
    }
}
