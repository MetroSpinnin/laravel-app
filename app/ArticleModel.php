<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    protected $fillable = [
    	'id',
    	'title',
    	'body'
    ];
}
