<?php

namespace App\Http\Controllers;

use App\Models\International;
use App\Models\Local;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function local(){
        $locals = Local::all();
        return view('allfiles.local', compact('locals'));
    }
    public function international(){
        $internationals = International::all();
        return view('allfiles.international',compact('internationals'));
    }
   public function internationaldetails($id){
    $international = International::find($id);
    return view('allfiles.tourdetails', ['international' => $international]);
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
