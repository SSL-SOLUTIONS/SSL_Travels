<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments= Apartment::all();
        return view('admin.apartments.index', compact('apartments'));
    }
    public function create()
    {
        return view('admin.apartments.create');
        
    }
    public function store(Request $request)
    {
        $request->validate([
             'price'=>'required|max:40',
             'rooms'=>'required|max:40',
             'image'=>'required|image',
             


             
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('admin/assets/images/apartments'), $imageName);
        $apartments = Apartment::create([
            'price'=>$request->price,
            'rooms'=>$request->rooms,
            'image'=>$imageName,
            


          
        ]);
        return redirect()->route('apartments.index')->with('success','Apartment Added Successfully');
    }
  
    public function edit($id)
    {
        $apartments=Apartment::find($id);
        return view('admin.apartments.edit', compact('apartments'));
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
        'price' => 'required|max:100',
        'rooms'=>'required',
        'image' => 'nullable|image',
        

       
    ]);
           $apartments = Apartment::where('id',$id)->first();
           if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('admin/assets/images/apartments'), $imageName);
            $apartments->image = $imageName;
           }
           $apartments->price = $request->price;
           $apartments->rooms = $request->rooms;
           


           $apartments->save();
           return redirect()->route('apartments.index')->with('success','Apartment Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         public function destroy($id)
    {
        Apartment::where('id', $id)->delete();
        return redirect()->route('apartments.index')->with('success','Apartment Removed Successfully');
    }
}
