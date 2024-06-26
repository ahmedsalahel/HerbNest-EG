<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class ContactFrontController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function contactUsForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Save the form data to the database
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);



        toast('Your message has been sent', 'success');
        return redirect()->route('contact');
    }
}
