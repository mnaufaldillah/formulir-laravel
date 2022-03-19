<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "name" => "Muhammad Naufaldillah",
            "email" => "mnaufaldillah@gmail.com",
            "title" => "Halaman Artikel Berita",
            //"articles" =>  Article::all()
            "articles" =>  Article::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }
}
