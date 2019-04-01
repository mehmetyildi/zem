<?php

namespace App\Http\Controllers;

use App\Models\Articles\Article;
use App\Models\Employee;
use App\Models\Popup;
use App\Models\Products\Category;
use App\Models\Projects\Project;
use App\Models\Reference;
use App\Models\Sector;
use App\Models\Slide;
use App\Models\Cms\Inbox\ContactForm;

class HomerController extends Controller
{
    /**
     * Show the coming-soon page
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();

        $projects = Project::where('promote', true)
            ->orderBy('position', 'ASC')
            ->take(3)
            ->get();

        $categories = Category::where('promote', true)
            ->orderBy('position', 'ASC')
            ->take(4)
            ->get();

        $references = Reference::where('promote', true)
            ->orderBy('position', 'ASC')
            ->take(6)
            ->get();

        $articles = Article::where('promote', true)
            ->orderBy('position', 'ASC')
            ->take(4)
            ->get();

        $thePopup = Popup::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->first();
        return view('home', compact('slides', 'categories', 'projects', 'articles', 'references', 'thePopup'));
    }

    /**
     * Show the about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $references = Reference::where('promote', true)
            ->orderBy('position', 'ASC')
            ->take(6)
            ->get();
        return view('about', compact('references'));
    }

    /**
     * Show the zmf-promise page.
     *
     * @return \Illuminate\Http\Response
     */
    public function zmf()
    {
        return view('zmf-promise');
    }

    /**
     * Show the hr page.
     *
     * @return \Illuminate\Http\Response
     */
    public function hr()
    {
        $pageForm = ContactForm::findOrFail(2);
        return view('hr', compact('pageForm'));
    }

    /**
     * Show the offer page.
     *
     * @return \Illuminate\Http\Response
     */
    public function offer()
    {
        $employees = Employee::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();
        $pageForm = ContactForm::findOrFail(4);
        return view('ask-offer', compact('employees', 'pageForm'));
    }

    /**
     * Show the references page.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the  contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function  contact()
    {
        $employees = Employee::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();
        $pageForm = ContactForm::findOrFail(1);
        return view('contact', compact('employees', 'pageForm'));
    }
}