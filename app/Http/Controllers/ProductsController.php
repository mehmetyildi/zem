<?php

namespace App\Http\Controllers;

use App\Models\Products\Category;
use App\Models\Products\Product;
use App\Models\Projects\Project;

class ProductsController extends Controller
{
    /**
     * Show the articles listing page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();
        return view('products.index', compact('categories'));
    }

    /**
     * Show the article detail page.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($category)
    {
        $theCategory = Category::where('url_'. app()->getLocale(), $category)->first();
        $projects = Project::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->where('category_id', $theCategory->id)
            ->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->where('category_id', $theCategory->id)
            ->orderBy('position', 'ASC')
            ->take(3)
            ->get();
        return view('products.category', compact('theCategory','projects'));
    }

    /**
     * Show the article detail page.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($category, $url)
    {
        $theCategory = Category::where('url_'. app()->getLocale(), $category)->first();
        $theProduct = Product::where('url_'. app()->getLocale(), $url)->first();
        $projects = Project::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->where('category_id', $theCategory->id)
            ->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->where('category_id', $theCategory->id)
            ->orderBy('position', 'ASC')
            ->take(3)
            ->get();
        return view('products.detail', compact('theCategory', 'theProduct', 'projects'));
    }

}