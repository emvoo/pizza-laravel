<?php

namespace App\Http\Controllers;

use File;

class PagesController extends Controller
{
	public function index(){
    	return view('index');
	}
	
	public function order(){
 		return view('order');
	}
	
	public function offers(){
 		return view('offers');
	}
	
	public function gallery(){
		$images = File::allFiles('images/gallery/restaurant');
 		return view('gallery')->with([
			'images' => $images
		]);
	}
	
	public function contact(){
 		return view('contact');
	}
	
	public function about(){
 		return view('about');
	}
	
	
}