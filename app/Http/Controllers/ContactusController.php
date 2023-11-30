<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index()
    {
        $contactusmessages = Contactus::all();
        return view('admin.contact.index',compact('contactusmessages'));
    }

    
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contactus = new Contactus();
        $contactus->fill($validatedData);

        $contactus->save();

        session()->flash('success', 'Message sent successfully!');

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
 $contactus = Contactus::find($id);
 $contactus->status = '1';
 $contactus->save();
 return back()->with('success', 'Message Read Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
