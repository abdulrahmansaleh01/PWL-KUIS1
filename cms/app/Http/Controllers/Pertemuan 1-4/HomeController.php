<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
class HomeController extends Controller
{

    /*-------------------Pertemuan 4-------------------------
    public function getAll()
    {
       $article = Article::all();
        return view('pertemuan4.home',['articles'=> $article]);
        
    }
    public function getAll()
    {
        $article = Cache::rememberForever('articles',function(){
            return Article::all()->get();
        });
        return view('pertemuan4.home',['articles'=> $article]);
    }
    --------------------------------------------------------*/
    public function getAll()
    {
       $article = Article::all();
        return view('pertemuan4.home',['articles'=> $article]);
        
    }
}



    /*-----------PERTEMUAN 3-------------
        public function home()
        {
            return view ('layouts.home');
        }
        public function home2()
        {
            return view ('layouts.home2');
        }
    ------------------------------------*/