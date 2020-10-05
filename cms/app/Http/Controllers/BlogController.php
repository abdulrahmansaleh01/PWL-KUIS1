<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Culture;
use App\Comment;
use Illuminate\Support\Facades\Cache;
class BlogController extends Controller
{
    /*---------TANPA CACHE-------------
    public function blog(){
        $cultures = Culture::all();
        return view('kuis1.blog',['cultures'=> $cultures]);
    }
    -----------------------------------*/

    public function blog(){
        $cultures = Cache::rememberForever('cultures', function(){
            return Culture::all();
        });
        return view('kuis1.blog',['cultures'=> $cultures]);
    }
}
