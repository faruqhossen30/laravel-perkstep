<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfoliopageController extends Controller
{
    public function Portfoliopage(){



        $per_page = null;
        if (isset($_GET['per_page']) && $_GET['per_page']) {
            $per_page = $_GET['per_page'];
        }
        $orderby = null;
        if (isset($_GET['orderby']) && $_GET['orderby']) {
            $orderby = $_GET['orderby'];
        }


        $portfilios = Portfolio::when($orderby, function ($query, $orderby) {
            return $query->orderBy('id', $orderby);
        })->paginate( $per_page ?? 9);
        return view('portfolio-page',compact('portfilios'));

    }


    public function SinglePortfolio($slug){
        $portfolio = Portfolio::firstWhere('slug', $slug);
        // return $portfolio;
        return view('single-portfolio',compact('portfolio'));
    }
}
