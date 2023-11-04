<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Vacation;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations= Destination::all();
        return view('admin.destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinations.create');
        
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
             'location'=>'required|max:40',
             'image'=>'required|image',
             
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('admin/assets/images/destinations'), $imageName);
        $destination = Destination::create([
            'location'=>$request->location,
            'image'=>$imageName,
          
        ]);
        return redirect()->route('destinations.index')->with('success','Record Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destination=Destination::find($id);
        return view('admin.destinations.edit', compact('destination'));
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
        'location' => 'required|max:100',
        'image' => 'nullable|image',
       
    ]);
           $destination = Destination::where('id',$id)->first();
           if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('admin/assets/images/destinations'), $imageName);
            $destination->image = $imageName;
           }
           $destination->location = $request->location;
           $destination->save();
           return redirect()->route('destinations.index')->with('success','Record Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         public function destroy($id)
    {
        Destination::where('id', $id)->delete();
        return redirect()->route('destinations.index')->with('success','Record Removed Successfully');
    }
}
