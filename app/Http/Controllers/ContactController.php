<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Certifique-se de importar o modelo apropriado

class ContactController extends Controller
{

    public function contact()
    {
        return view('coming-soon.contact');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|url|max:255',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->website = $request->input('website');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}

