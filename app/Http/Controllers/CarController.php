<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars= Car::all();
        return view('admin.cars.index', compact('cars'));
    }
    public function create()
    {
        return view('admin.cars.create');
        
    }
    public function store(Request $request)
    {
        $request->validate([
             'name'=>'required|max:40',
             'model'=>'required',
             'rent'=>'required',
             'image'=>'required|image',
             


             
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('admin/assets/images/cars'), $imageName);
        $cars = Car::create([
            'name'=>$request->name,
            'model'=>$request->model,
            'rent'=>$request->rent,
            'image'=>$imageName,
            


          
        ]);
        return redirect()->route('cars.index')->with('success','Car Added Successfully');
    }
  
    public function edit($id)
    {
        $cars=Car::find($id);
        return view('admin.cars.edit', compact('cars'));
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
        'name' => 'required|max:100',
        'model'=>'required',
        'rent'=>'required',
        'image' => 'nullable|image',
        

       
    ]);
           $cars = Car::where('id',$id)->first();
           if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('admin/assets/images/cars'), $imageName);
            $cars->image = $imageName;
           }
           $cars->name = $request->name;
           $cars->model = $request->model;
           $cars->rent = $request->rent;
           


           $cars->save();
           return redirect()->route('cars.index')->with('success','Car Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         public function destroy($id)
    {
       Car::where('id', $id)->delete();
        return redirect()->route('cars.index')->with('success','Car Removed Successfully');
    }
}
