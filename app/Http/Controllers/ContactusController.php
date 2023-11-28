<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactusmessages = Contactus::all();
        return view('admin.contact.index',compact('contactusmessages'));
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
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Create a new Contactus instance and fill it with the validated data
        $contactus = new Contactus();
        $contactus->fill($validatedData);

        // Save the contactus message to the database
        $contactus->save();

        // Optionally, you can flash a success message to the session
        // to be displayed on the next request (e.g., after a redirect)
        session()->flash('success', 'Message sent successfully!');

        // Redirect back to the form or any other page
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
