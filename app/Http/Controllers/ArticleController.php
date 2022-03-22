<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
		return view('article', [
		
			"title" => "Halaman semua artikel",
			"name" => "Florentino Benedictus",
			"email" => "florentinobenedictus@gmail.com",
			"articles" => Article::all()
		]);
	}

	public function content(Article $article){
		return view('konten', [
			"article" => $article
		]);
	}
}
