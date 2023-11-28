<?php

namespace App\Http\Controllers;

use App\Models\International;
use App\Models\InternationalPackage;
use App\Models\Local;
use App\Models\LocalPackage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $internationals = International::count();
        $internationalspackages = InternationalPackage::count();
        $locals = Local::count();
        $localpackages = LocalPackage::count();
return view('admin.dashboard',compact('internationals','internationalspackages','locals','localpackages'));
    }
}
