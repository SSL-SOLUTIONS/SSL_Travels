<?php

namespace App\Http\Controllers;

use App\Models\International;
use App\Models\InternationalPackage;
use App\Models\Local;
use App\Models\LocalPackage;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function local()
    {
        $locals=Local::all();
        return view('allfiles.local', compact('locals'));
    }


    public function locpackages($id)
    {
        $local = Local::with('localpackages')->findOrFail($id);
        $localpackages = $local->localpackages; 
        return view('local.packages', compact('local', 'localpackages'));
    }
    
   

    public function international()
    {
        $internationals = International::all();
        return view('allfiles.international', compact('internationals'));
    }
    
    public function intpackages($id)
    {
        $international = International::with('internationalpackages')->findOrFail($id);
        $internationalspackages = $international->internationalpackages; 
        return view('international.packages', compact('international', 'internationalspackages'));
    }

    public function internationalpackages($id)
    {
        $internationalpackages = International::all($id);
        return view('allfiles.internationalpackages', ['internationalpackages' => $internationalpackages]);

    }
    public function packagedetails($id)
    {
        // Retrieve the details for the specified package ID
        $packageDetails = InternationalPackage::find($id); // Replace 'InternationalPackage' with your actual model name
    
        // Return the package details view with the retrieved data
        return view('international.packagedetails', ['packageDetails' => $packageDetails]);
    }


    public function localpackagedetails($id)
    {
        $localpackageDetails = LocalPackage::find($id); 
        return view('local.packagedetails', ['localpackageDetails' => $localpackageDetails]);
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
