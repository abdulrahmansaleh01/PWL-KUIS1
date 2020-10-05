<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
    	return view('layouts.about');
    }
    public function about2(){
    	return view('layouts.about2');
    }
}
