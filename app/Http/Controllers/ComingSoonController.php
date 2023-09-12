<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class ComingSoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('coming-soon.index');
    }

    public function about()
    {

        return view('coming-soon.about', []);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255|unique:newsletters',
        ]);

        if (Newsletter::where('email', $request->input('email'))->exists()) {
            return redirect()->back()->with('error', 'You have already subscribed!');
        }

        $contact = new Newsletter();
        $contact->email = $request->input('email');
        $contact->save();
        return true;
    }
}
