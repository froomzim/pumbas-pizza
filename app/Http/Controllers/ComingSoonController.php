<?php

namespace App\Http\Controllers;

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

        return view('coming-soon.about', [
        ]);
    }

    public function contact()
    {
        return view('coming-soon.contact');
    }
}
