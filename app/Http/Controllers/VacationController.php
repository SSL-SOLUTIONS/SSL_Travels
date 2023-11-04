<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use Illuminate\Http\Request;

class vacationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacationes= Vacation::all();
        return view('admin.vacationes.index', compact('vacationes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vacationes.create');
        
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
             'title'=>'required|max:40',
             'image'=>'required|image',
             
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('admin/assets/images/vacationes'), $imageName);
        $vacation = Vacation::create([
            'title'=>$request->title,
            'image'=>$imageName,
          
        ]);
        return redirect()->route('vacationes.index')->with('success','Record Added Successfully');
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
        $vacation=Vacation::find($id);
        return view('admin.vacationes.edit', compact('vacation'));
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
       
    ]);
           $vacation = vacation::where('id',$id)->first();
           if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('admin/assets/images/vacationes'), $imageName);
            $vacation->image = $imageName;
           }
           $vacation->title = $request->title;
           $vacation->save();
           return redirect()->route('vacationes.index')->with('success','Record Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         public function destroy($id)
    {
        vacation::where('id', $id)->delete();
        return redirect()->route('vacationes.index')->with('success','Record Removed Successfully');
    }
}
