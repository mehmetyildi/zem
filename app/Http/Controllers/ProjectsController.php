<?php

namespace App\Http\Controllers;


use App\Models\City;
use App\Models\Products\Category;
use App\Models\Projects\Project;
use App\Models\Projects\ProjectType;
use App\Models\Reference;
use App\Models\Sector;

class ProjectsController extends Controller
{
    /**
     * Show the projects listing page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $types = ProjectType::all();
        $categories = Category::all();
        $sectors = Sector::all();
        $cities = City::all();


        $projects = Project::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();


        $references = Reference::where('promote', true)
            ->orderBy('position', 'ASC')
            ->get();
        return view('projects.index', compact('projects', 'types', 'categories', 'sectors', 'cities', 'references'));
    }

    /**
     * Show the project detail page.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($url)
    {
        $theProject = Project::where('url_' . app()->getLocale(), $url)->firstOrFail();


        //Category id not found in projects table
        /*       $projects = Project::where('id', '!=', $theProject->id)
                    ->where('publish_until', '>=', todayWithFormat('Y-m-d'))
                    ->where('publish', true)
                    ->where('category_id', $theProject->category_id)
                    ->orWhere('publish_until', null)
                    ->where('id', '!=', $theProject->id)
                    ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
                    ->where('publish', true)
                    ->where('category_id', $theProject->category_id)
                    ->orderBy('position', 'ASC')
                    ->take(3)
                    ->get();
        */

        return view('projects.detail', compact('theProject'));
    }

}