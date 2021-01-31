<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Vimi;
use Illuminate\Http\Request;

class VimiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.vimi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'images' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('images')) {
            $imgName = time(). '.' . $request->images->extension();
            $path = $request->images->storeAs('vimi/images', $imgName);
        }

        $attr = $request->all();
        $attr['images'] = $path;
        
        Vimi::create($attr);
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vimi  $vimi
     * @return \Illuminate\Http\Response
     */
    public function show(Vimi $vimi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vimi  $vimi
     * @return \Illuminate\Http\Response
     */
    public function edit(Vimi $vimi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vimi  $vimi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vimi $vimi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vimi  $vimi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vimi $vimi)
    {
        //
    }
}
