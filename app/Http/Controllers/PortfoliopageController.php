<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfoliopageController extends Controller
{
    public function index(){
        $portfolios = Portfolio::paginate();
        return view('portfolio-page-new', compact('portfolios'));
    }
    public function portfolioPage()
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

        $portfilios = Portfolio::when($orderby, function ($query, $orderby) {
            return $query->orderBy('id', $orderby);
        })
            ->when($category_id, function ($query, $category_id) {
                $query->whereHas('categories', function ($q) use ($category_id) {
                    return $q->where('category_id', $category_id);
                });
            })

            ->paginate($per_page ?? 9);

        $categories = Category::get();
        return view('portfolio-page', compact('portfilios', 'categories'));
    }



    public function singlePortfolio($slug)
    {
        $portfolio = Portfolio::with('sections')->firstWhere('slug', $slug);
        // return $portfolio;
        return view('single-portfolio', compact('portfolio'));
    }
}
