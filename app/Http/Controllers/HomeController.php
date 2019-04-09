<?php

namespace App\Http\Controllers;

use App\Models\Articles\Article;
use App\Models\Employee;
use App\Models\Popup;
use App\Models\Slide;
use App\Models\Reference;
use App\Models\Sector;
use App\Models\Projects\Project;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\Cms\Inbox\ContactForm;

class HomeController extends Controller
{
    public function home()
    {

        $sliders = Slide::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();

        $articles = Article::where('promote', true)
            ->where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->where('promote', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->take(4)
            ->get();

        $thePopup = Popup::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->first();

        $projects = Project::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->take(3)
            ->get();

        return view('home', compact('thePopup', 'sliders', 'articles', 'projects'));
    }


    public function about_us()
    {


        return view('about');
    }

    public function references()
    {

        $sectors = Sector::all();
        $references = Reference::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();



        return view('references', compact('sectors', 'references'));



    }


    public function product_detail()
    {
        /* $productImages = ProductImage::where('key', 'product-detail')
             ->where('publish_until', '>=', todayWithFormat('Y-m-d'))
             ->where('publish', true)->orWhere('publish_until', null)->where('key','product-detail')
             ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
             ->where('publish', true)
             ->get();

         $pageForm = ContactForm::findOrFail(3);  ,compact('productImages','pageForm')*/


        return view('product-detail');
    }


    public function news()
    {


        return view('news');
    }

    public function news_detail($url)
    {

        $theArticle = Article::where('url', $url)->firstOrFail();

        $articles = Article::where('id', '!=', $theArticle->id)->where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('id', '!=', $theArticle->id)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->take(6)
            ->get();

        return view('news_details', compact('theArticle', 'articles'));
    }


    public function projects()
    {
        /* $pageForm = ContactForm::findOrFail(2);   , compact('pageForm')*/
        return view('projects');
    }

    public function contact()
    {

        $employees = Employee::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();


        return view('contact', compact('employees'));
    }


    public function project_detail()
    {

        return view('project-detail');
    }


    public function product_categories()
    {
        /* $productImages = ProductImage::where('key','bead_ring')
             ->where('publish_until', '>=', todayWithFormat('Y-m-d'))
             ->where('publish', true)->orWhere('publish_until', null)->where('key','bead_ring')
             ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
             ->where('publish', true)
             ->get();*/

        // $pageForm = ContactForm::findOrFail(3); ,compact('productImages', 'pageForm')
        return view('product-categories');
    }

    public function hr()
    {
        return view('hr');
    }


    public function blog()
    {
        /*$articles = Article::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until')
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get(); ,compact('articles') */

        return view('blog');
    }



}
