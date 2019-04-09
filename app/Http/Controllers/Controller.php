<?php

namespace App\Http\Controllers;

use App\Models\Articles\Article;
use App\Models\Cms\Inbox\ContactForm;
use App\Models\Products\Product;
use App\Models\Products\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $l = config('app.locale');
        $layoutProducts = Product::all()->groupBy('category_id');

        $layoutCategories = Category::all();

        View::share(array(
            'l' => $l,
            'layoutProducts' => $layoutProducts,
            'layoutCategories' => $layoutCategories
        ));
    }
}
