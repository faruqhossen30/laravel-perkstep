<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogpageController extends Controller
{
    public function blogPage()
    {
        $per_page = null;
        if (isset($_GET['per_page']) && $_GET['per_page']) {
            $per_page = $_GET['per_page'];
        }
        $orderby = null;
        if (isset($_GET['orderby']) && $_GET['orderby']) {
            $orderby = $_GET['orderby'];
        }

        $category_id = null;
        if (isset($_GET['category_id']) && $_GET['category_id']) {
            $category_id = $_GET['category_id'];
        }

        // return $category_id;
        // if (isset($_GET['category']) && $_GET['category']) {
        //     $category = $_GET['category'];
        //     $services = $services->whereHas('categories', function ($q) use ($category) {
        //         return $q->where('category_id', $category);
        //     });
        // }

        $blogs = Blog::when($orderby, function ($query, $orderby) {
            return $query->orderBy('id', $orderby);
        })
            ->when($category_id, function ($query, $category_id) {
                $query->whereHas('categories', function ($q) use ($category_id) {
                    return $q->where('category_id', $category_id);
                });
            })
            ->paginate($per_page ?? 9);

        // return $blogs ;
        $categories = Category::get();

        return view('blogpage', compact('blogs', 'categories'));
    }
}
