<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        // validate form
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // send mail
        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect('contact');
    }
}
