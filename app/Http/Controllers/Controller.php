<?php

namespace App\Http\Controllers;

use App\Models\Articles\Article;
use App\Models\Cms\Inbox\ContactForm;
use App\Models\Products\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(){
        $l = config('app.locale');
        $layoutCategories = Category::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();
        $layoutArticles = Article::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();
        $layoutQuickOfferForm = ContactForm::findOrFail(3);
        View::share(array(
            'l' => $l,
            'layoutCategories' => $layoutCategories,
            'layoutQuickOfferForm' => $layoutQuickOfferForm,
            'layoutArticles' => $layoutArticles,
        ));
    }
}
