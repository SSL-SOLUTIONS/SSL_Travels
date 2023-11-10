<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Local;


class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locals= Local::all();
        return view('admin.locals.index', compact('locals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.locals.create'); 
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
        $request->image->move(public_path('admin/assets/images/locals'), $imageName);
        $local = Local::create([
            'title'=>$request->title,
            'image'=>$imageName,
        ]);
        return redirect()->route('locals.index')->with('success','Record Added Successfully');
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
        $local =Local::find($id);
        return view('admin.locals.edit', compact('local'));
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
           $local = Local::where('id',$id)->first();
           if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('admin/assets/images/locals'), $imageName);
            $local->image = $imageName;
           }
           $local->title = $request->title;
           $local->save();
           return redirect()->route('locals.index')->with('success','Record Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         public function destroy($id)
    {
        local::where('id', $id)->delete();
        return redirect()->route('locals.index')->with('success','Record Removed Successfully');
    }
}
