<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $articles = Article::where('category_id',$category->id)->paginate(8);

        return view('articles.index',compact('articles','category'));
    }
}
