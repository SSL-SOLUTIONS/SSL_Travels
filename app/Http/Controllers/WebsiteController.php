<?php

namespace App\Http\Controllers;

use App\Models\International;
use App\Models\InternationalPackage;
use App\Models\Local;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function local()
    {
        $locals = Local::all();
        return view('allfiles.local', compact('locals'));
    }
    public function localdetails($id)
    {
        $local = Local::find($id);
        return view('allfiles.localtourdetails', ['local' => $local]);
    }

    public function international()
    {
        $internationals = International::all();
        return view('allfiles.international', compact('internationals'));
    }
<<<<<<< HEAD
    
=======

    public function intpackages($id)
    {
        $international = International::with('internationalpackages')->findOrFail($id);
        $internationalspackages = $international->internationalpackages; 
        return view('international.packages', compact('international', 'internationalspackages'));
    }
>>>>>>> eec7452c40b5374ed3f671a92e9c2a3da0739dc2
    public function internationalpackages($id)
    {
        $internationalpackages = International::all($id);
        return view('allfiles.internationalpackages', ['internationalpackages' => $internationalpackages]);

    }
    public function destination()
    {
        return view('allfiles.destination');
    }
    public function transport()
    {
        return view('allfiles.transport');
    }
    public function about()
    {
        return view('allfiles.about');
    }
    public function contact()
    {
        return view('allfiles.contact');
    }
    public function activities()
    {
        return view('allfiles.activities');
    }
}
