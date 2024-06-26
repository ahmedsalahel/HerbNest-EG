<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contact::all();
        return view('dash.contact.all', compact('data'));
    }


    public function destroy(Contact $contact)
    {

        $contact->delete();
        return redirect()->route('dashboard.contacts.index');
    }
}
