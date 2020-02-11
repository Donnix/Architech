<?php

namespace App\Http\Controllers;
Use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact');
    }

    public function store (Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'saran' => 'required',
        ]);
  
        Contact::create($request->all());
        return back()->with('success', 'Thanks for contacting us!');
    }
}


