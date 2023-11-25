<?php

namespace App\Http\Controllers;

use App\Models\InternationalPackage;
use Illuminate\Http\Request;

class InternationalpackagesController extends Controller
{
    public function index()
    {
        $internationalspackages=InternationalPackage::all();
        return view('admin.internationalpackages.index', compact('internationalspackages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.internationalpackages.create');
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
            'international_id' => 'required',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('admin/assets/images/internationals'), $imageName);
        $internationalspackages = InternationalPackage::create([
            'title' => $request->title,
            'image' => $imageName,
            'price' => $request->price,
            'description' => $request->description,
            'international_id' => $request->input('international_id'),

        ]);
        return redirect()->route('internationalspackages.index')->with('success', 'Record Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    

    public function show($id)
    {
        $internationalspackage = InternationalPackage::find($id);
        return view('admin.internationalpackages.show', compact('internationalspackage'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $internationalspackages = InternationalPackage::find($id);
        return view('admin.internationalpackages.edit', compact('internationalspackages'));
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
            'description' => 'required',
            'international_id' => 'required',


        ]);
        $internationalspackages = InternationalPackage::where('id', $id)->first();
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('admin/assets/images/internationals'), $imageName);
            $internationalspackages->image = $imageName;
        }
        $internationalspackages->title = $request->title;
        $internationalspackages->price = $request->price;
        $internationalspackages->description = $request->description;
        $internationalspackages->international_id = $request->input('international_id'); // Corrected line
        $internationalspackages->save();
        return redirect()->route('internationalspackages.index')->with('success', 'Record Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InternationalPackage::where('id', $id)->delete();
        return redirect()->route('internationalspackages.index')->with('success', 'Record Removed Successfully');
    }
}
