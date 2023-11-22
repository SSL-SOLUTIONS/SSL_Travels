<?php

namespace App\Http\Controllers;


use App\Models\International;
use Illuminate\Http\Request;

class InternationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internationals= International::all();
        return view('admin.internationals.index', compact('internationals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.internationals.create');
        
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
             'description'=>'required|max:2000',
             


             
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('admin/assets/images/internationals'), $imageName);
        $international = International::create([
            'title'=>$request->title,
            'image'=>$imageName,
            'description'=>$request->description,
            


          
        ]);
        return redirect()->route('internationals.index')->with('success','Record Added Successfully');
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
        $international=International::find($id);
        return view('admin.internationals.edit', compact('international'));
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
        'description'=>'required',
        

       
    ]);
           $international = International::where('id',$id)->first();
           if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('admin/assets/images/internationals'), $imageName);
            $international->image = $imageName;
           }
           $international->title = $request->title;
           $international->description = $request->description;
           


           $international->save();
           return redirect()->route('internationals.index')->with('success','Record Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         public function destroy($id)
    {
       International::where('id', $id)->delete();
        return redirect()->route('internationals.index')->with('success','Record Removed Successfully');
    }
}
