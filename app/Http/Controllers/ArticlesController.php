<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\ArticleModel;

class ArticlesController extends Controller
{
    public function index(){
    	$articles = ArticleModel::all();
    	return view('article.index', compact('articles'));
    }

    public function show($id){
    	$article = ArticleModel::findOrFail($id);
    	return view('article.show', compact('article'));
    }

    public function create(){
    	return view('article.create');
    }

    public function store(){
    	$input = Request::all();
    	ArticleModel::create($input);
    	return redirect('articles');
    }
}
