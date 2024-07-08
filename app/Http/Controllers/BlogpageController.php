<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogpageController extends Controller
{
    public function blogPage($slug)
    {

        $blog = Blog::firstWhere('slug', $slug);

        // return $blog ;
        return view('blogpage',compact('blog'));
    }
}
