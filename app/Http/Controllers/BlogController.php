<?php

namespace App\Http\Controllers;

use App\Models\BlogPosts\BlogPost;

class BlogController extends Controller
{
    /**
     * Show the articles listing page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->get();
        return view('blog.index', compact('posts'));
    }

    /**
     * Show the article detail page.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($url)
    {
        $theBlogPost = BlogPost::where('url_'. app()->getLocale(), $url)->firstOrFail();
        $posts = BlogPost::where('id', '!=', $theBlogPost->id)->where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('id', '!=', $theBlogPost->id)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->take(4)
            ->get();
        return view('blog.detail', compact('theBlogPost', 'theBlogPost'));
    }

}