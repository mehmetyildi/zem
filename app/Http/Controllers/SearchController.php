<?php

namespace App\Http\Controllers;


use App\Models\Articles\Article;
use App\Models\Products\Category;
use App\Models\Products\Product;
use App\Models\Projects\Project;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Show search results
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $articles = Article::where('title_'.app()->getLocale(), 'LIKE', '%'.$request->keyword.'%')->get();
        $categories = Category::where('title_'.app()->getLocale(), 'LIKE', '%'.$request->keyword.'%')->get();
        $products = Product::where('title_'.app()->getLocale(), 'LIKE', '%'.$request->keyword.'%')->get();
        $projects = Project::where('title_'.app()->getLocale(), 'LIKE', '%'.$request->keyword.'%')->get();
        $keyword = $request->keyword;
        return view('search', compact('articles', 'categories', 'products', 'projects', 'keyword'));
    }
}