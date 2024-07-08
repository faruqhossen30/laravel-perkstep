<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::latest()->paginate();
        return view('faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $data = [
            'question' => $request->question,
            'answer'   => $request->answer,
        ];
        Faq::create($data);
        Session::flash('create');
        return redirect()->route('faq.index')->with('create', ' faq Successfully Created');
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
        $faq = Faq::where('id', $id)->first();
        // return $package;
        return view('faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'question' => $request->question,
            'answer'   => $request->answer,
        ];
        Faq::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('faq.index')->with('warning', ' faq Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Faq::where('id', $id)->delete();
        return redirect()->route('faq.index');
    }
}
