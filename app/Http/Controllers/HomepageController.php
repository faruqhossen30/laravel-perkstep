<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage() {


        $blogs = Blog::with('users')->paginate(3);
        // return $blog;
        return view('homepage',compact('blogs'));
    }
}
