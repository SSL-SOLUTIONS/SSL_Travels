<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function vacations(){
        return view('allfiles.vacations');
    }
    public function destinations(){
        return view('allfiles.destinations');
    }
    public function transport(){
        return view('allfiles.transport');
    }
    public function about(){
        return view('allfiles.about');
    }
    public function contact(){
        return view('allfiles.contact');
    }
    public function activities(){
        return view('allfiles.activities');
    }
}
