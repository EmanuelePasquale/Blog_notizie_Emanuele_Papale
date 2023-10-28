<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('auth.articles.create');
    }

 

  
    public function show(Article $article)
    {
        //
    }

 

}
