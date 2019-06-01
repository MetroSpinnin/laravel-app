<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Requests\CreateArticleRequest;
use App\ArticleModel;

class ArticlesController extends Controller
{
    public function index(){
    	$articles = ArticleModel::latest()->get();
    	return view('article.index', compact('articles'));
    }

    public function show($id){
    	$article = ArticleModel::findOrFail($id);
    	return view('article.show', compact('article'));
    }

    public function create(){
    	return view('article.create');
    }

    public function store(CreateArticleRequest $request){
    	
    	ArticleModel::create($request->all());
    	return redirect('articles');
    }
}
