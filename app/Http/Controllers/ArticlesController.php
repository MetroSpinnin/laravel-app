<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleModel;

class ArticlesController extends Controller
{
    public function index(){
    	$articles = ArticleModel::all();
    	return $articles;
    }
}
