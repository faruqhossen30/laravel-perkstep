<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request->all();
        $request->validate(
            [
                'title'               => 'required',
                'description'         => 'required',
                'description'         => 'required',
                'status'              => 'required',
            ]
        );
        $data = [
            'title'               => $request->title,
            'slug'                => Str::slug($request->title, '-'),
            'description'         => $request->description,
            'user_id'             => Auth::user()->id,
            'meta_title'          => $request->meta_title,
            'meta_description'    => $request->meta_description,
            'meta_keyword'        => $request->meta_keyword,
            'status'              => $request->status
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/portfolio/');
            $data['thumbnail'] = $file_name;
        }

        Portfolio::create($data);
        Session::flash('create');
        return redirect()->route('portfolio.index')->with('create','Portfolio successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $portfolio = Portfolio::firstWhere('id', $id);
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'title'               => 'required',
                'description'         => 'required',
            ]
        );

        $data = [
           'title'                => $request->title,
            'slug'                => Str::slug($request->title, '-'),
            'description'         => $request->description,
            'user_id'             => Auth::user()->id,
            'meta_title'          => $request->meta_title,
            'meta_description'    => $request->meta_description,
            'meta_keyword'        => $request->meta_keyword,
            'status'              => $request->status
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/portfolio/');
            $data['thumbnail'] = $file_name;
        }
        Portfolio::firstWhere('id',$id)->update($data);
        Session::flash('warning');
        return redirect()->route('portfolio.index')->with('warning',' Blog Successfully Updated');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        Storage::delete($portfolio->thumbnail);
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('success','data successfully Deleted');
    }
}
