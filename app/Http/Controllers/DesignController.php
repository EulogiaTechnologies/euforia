<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredesignRequest;
use App\Http\Requests\UpdatedesignRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Design;
use Auth;
class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("design");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveDesign(Request $request)
    {
        $design = new Design();
        $design->user_id = Auth::id();
        $design->data = $request->input('data');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('design_images');
            $design->image_url = $path;
        }

        $design->is_template = $request->input('is_template', false);
        $design->save();

        return response()->json(['message' => 'Design saved successfully', 'design' => $design]);
    }

    /**
     * Display the specified resource.
     */
    public function show(design $design)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(design $design)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedesignRequest $request, design $design)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(design $design)
    {
        //
    }
}
