<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::latest()->paginate(10);
        return view('review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'        => 'required',
            'designation' => 'required',
            'review'      => 'required',
            'rating'      => 'required',
        ]);

        $data = [
            'name'        => $request->name,
            'designation' => $request->designation,
            'review'      => $request->review,
            'rating'      => $request->rating,
            'date'        => $request->date,
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/blog/');
            $data['thumbnail'] = $file_name;
        }

        Review::create($data);
        Session::flash('create');
        return redirect()->route('review.index')->with('create', ' review Successfully Created');
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
        $review = Review::where('id', $id)->first();
        // return $package;
        return view('review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name'        => $request->name,
            'designation' => $request->designation,
            'review'      => $request->review,
            'rating'      => $request->rating,
            'date'        => $request->date,
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/blog/');
            $data['thumbnail'] = $file_name;
        }
        Review::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('review.index')->with('warning', ' review Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::findOrFail($id);
        Storage::delete($review->thumbnail);
        $review->delete();
        return redirect()->route('review.index')->with('success','data successfully Deleted');
    }
}
