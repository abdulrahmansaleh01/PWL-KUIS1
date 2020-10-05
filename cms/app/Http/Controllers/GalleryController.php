<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Culture;
use Illuminate\Support\Facades\Cache;
class GalleryController extends Controller
{
    /*---------TANPA CACHE-------------
    public function gallery(){
        $cultures = Culture::all();
        return view('kuis1.gallery',['cultures'=> $cultures]);
    }
    -----------------------------------*/

    public function gallery(){
        $cultures = Cache::rememberForever('cultures', function(){
            return Culture::all();
        });
        return view('kuis1.gallery',['cultures'=> $cultures]);
    }
}
