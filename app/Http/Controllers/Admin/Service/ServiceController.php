<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.service.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required'
        ]);
        $data = [
            'title'            => $request->title,
            'slug'             => Str::slug($request->title, '-'),
            'description'      => $request->description,
            'user_id'          => Auth::user()->id,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
            'status'           => $request->status
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/service/');
            $data['thumbnail'] = $file_name;
        }
        $service=Service::create($data);
        if(!empty($request->category_ids)){
            foreach($request->category_ids as $id){
               ServiceCategory::create([
                   'service_id'=>$service->id,
                   'category_id'=>$id
               ]);
            }
       }
        Session::flash('create');
        return redirect()->route('service.index')->with('create', ' Service Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        // $blog = Blog::with('categories')->firstWhere('id', $id);
        // $categories = Category::get();
        // $cat_ids = $blog->categories->pluck('id')->toArray();

        $service = Service::where('id', $id)->first();
        $categories = Category::get();
        $cat_ids = $service->categories->pluck('id')->toArray();
        return view('admin.service.edit', compact('service','cat_ids','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'title'            => $request->title,
            'slug'              => Str::slug($request->title, '-'),
            'description'      => $request->description,
            'user_id'          => Auth::user()->id,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
            'status'           => $request->status
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/portfolio/');
            $data['thumbnail'] = $file_name;
        }

        if(!empty($request->category_ids)){
            ServiceCategory::where('service_id', $id)->delete();
             foreach($request->category_ids as $cat){
                ServiceCategory::create([
                    'service_id'  => $id,
                    'category_id' => $cat
                ]);
             }
        }
        Service::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('service.index')->with('warning', ' Service Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::where('id', $id)->delete();
        return redirect()->route('service.index');
    }
}
