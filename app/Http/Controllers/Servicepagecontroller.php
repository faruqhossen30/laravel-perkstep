<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class Servicepagecontroller extends Controller
{
    public function servicePage()
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

        $services = Service::when($orderby, function ($query, $orderby) {
            return $query->orderBy('id', $orderby);
        })
            ->when($category_id, function ($query, $category_id) {
                $query->whereHas('categories', function ($q) use ($category_id) {
                    return $q->where('category_id', $category_id);
                });
            })

            ->paginate($per_page ?? 9);

        $categories = Category::get();
        return view('servicepage', compact('services', 'categories'));
    }

    public function singleServicePage($slug){

        $service = Service::firstWhere('slug', $slug);
        // return $portfolio;
        return view('single-service', compact('service'));
    }
}
