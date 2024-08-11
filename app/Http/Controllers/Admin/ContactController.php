<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactUs;
class ContactController extends Controller
{



    public function contactPage() {

        return view('contact');

    }
    public function create()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = [
            'name'     => $request->name,
            'email'    => $request->email,
            'company' => $request->company,
            'phone'    => $request->phone,
            'message'  => $request->message
        ];
        Mail::to('admin@gmail.com')->send(new ContactUs($data));
        return redirect()->back();
    }
}
