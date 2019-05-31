<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
    	$first = 'Metro';
    	$last = 'boomin';
    	return view('pages.about', compact('first', 'last'));
    }

    public function contact(){
    	return view('pages.contact');
    }
}
