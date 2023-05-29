<?php

namespace App\Http\Controllers;

use App\Models\Slideshow;
use Illuminate\Http\Request;

class MyHomeController extends Controller
{
    
    public function index(){
        $slideshows = Slideshow::where('enable', '1')
                        ->orderBy('ssorder')
                        ->get();
        return view('home', compact('slideshows'));
    }
}
