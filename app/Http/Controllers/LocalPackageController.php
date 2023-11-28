<?php

namespace App\Http\Controllers;

use App\Models\LocalPackage;
use Illuminate\Http\Request;

class LocalPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $localpackages=LocalPackage::all();
        return view('admin.localpackages.index', compact('localpackages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.localpackages.create');
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
            'title' => 'required|max:40',
            'image' => 'required|image',
            'price' => 'required',
            'description' => 'required',
            'local_id' => 'required',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('admin/assets/images/localpkg'), $imageName);
        $localpackages = LocalPackage::create([
            'title' => $request->title,
            'image' => $imageName,
            'price' => $request->price,
            'description' => $request->description,
            'local_id' => $request->input('local_id'),

        ]);
        return redirect()->route('localpackages.index')->with('success', 'Record Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $internationalspackage = LocalPackage::find($id);
    //     return view('admin.localpackages.show', compact('internationalspackage'));
    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $localpackages = LocalPackage::find($id);
        return view('admin.localpackages.edit', compact('localpackages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:100',
            'image' => 'nullable|image',
            'price' => 'required',
            'local_id' => 'required',
            'description' => 'required',


        ]);
        $localpackages = LocalPackage::where('id', $id)->first();
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('admin/assets/images/localpkg'), $imageName);
            $localpackages->image = $imageName;
        }
        $localpackages->title = $request->title;
        $localpackages->price = $request->price;
        $localpackages->local_id = $request->input('local_id');
         // Corrected line
         $localpackages->description = $request->description;
        $localpackages->save();
        return redirect()->route('localpackages.index')->with('success', 'Record Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LocalPackage::where('id', $id)->delete();
        return redirect()->route('localpackages.index')->with('success', 'Record Removed Successfully');
    }
}
