<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutpageController extends Controller
{
    public function aboutPage() {

        return view('aboutus');
    }
}
