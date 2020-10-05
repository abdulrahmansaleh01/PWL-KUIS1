<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{    
    
    public function getById($id)
    {
        $article = Article::find($id);
        return view('pertemuan4.article', ['articles'=>$article]);
    }
    
}

    /*----------PERTEMUAN 3-------------
    public function article(){
        return view ('layouts.article');
    }
    public function article2(){
        return view ('layouts.article2');
    }
    ------------------------------------*/