<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        return view('pages.index', compact('articles'));
    }
}
