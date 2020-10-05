<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function home(){
    	return 'Selamat Datang';
    }

    public function about(){
    	return 'NIM  : 1931710038 <br> Nama: Abdul Rahman Saleh';
    }

    public function articles($id){
    	return 'Halaman ini menggunakan artikel ' . $id;
    }

}