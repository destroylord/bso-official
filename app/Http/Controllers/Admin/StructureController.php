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

    public function edit(StructureOrganization $structure)
    {
        $category_structures = CategoryStructure::get();
        return view('admin.so.edit', compact('structure', 'category_structures'));
    }

    public function update(StructureRequest $request, StructureOrganization $structure)
    {
        // $people = StructureOrganization::find($id);
        
        $attr = $request->all();
        
        
        if (request()->hasFile('images') != '') {
            $image_path = public_path('/storage/'. $structure->images);
            if (\File::exists($image_path)) {
                unlink($image_path);
            }
            $image = request()->file('images')->store('uploads', 'public');
            $attr['images'] = $image;

            $structure->update;

            return back();
        }

        return back();
    }

    public function destroy($id)
    {
        $data = StructureOrganization::find($id);
        $image_path = public_path()."/storage/".$data->images;
        unlink($image_path);
        $data->delete();

        return back();
    }
}
