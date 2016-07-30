<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Books;
use App\Author;
use App\Cate;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * 首页显示
     */
    public function home()
    {
    	$books = Books::where('nb',3)->take(10)->get();
    	$book = Books::where('nb',4)->take(10)->get();
    	$cate1 = Cate::where('path','0,1')->take(8)->get();
    	$cate2 = Cate::where('path','0,2')->take(8)->get();
    	$cate3 = Cate::where('path','0,3')->take(8)->get();
    	$cate4 = Cate::where('path','0,4')->take(8)->get();
    	$cate5 = Cate::where('path','0,5')->take(8)->get();
    	$cate6 = Cate::where('path','0,6')->take(8)->get();
    	$nbook =  Books::where('nb', 4)
	    ->orderBy(\DB::raw('RAND()'))
	    ->take(9)
	    ->get();
	    // dd($nbook);
        return view('index/home/index',[
        	'books'=>$books,
        	'book'=>$book,
        	'cate1'=>$cate1,
        	'cate2'=>$cate2,
        	'cate3'=>$cate3,
        	'cate4'=>$cate4,
        	'cate5'=>$cate5,
        	'cate6'=>$cate6,
        	'nbook'=>$nbook,
        	]);
    }

    public function e()
    {
    	session(['uid'=> null]);
    	if(!session('uid')){
    		return redirect('/');
    	}
    }
}
