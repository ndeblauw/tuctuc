<?php

namespace App\Http\Controllers;

use App\Notifications\ContactMe;
use Illuminate\Http\Request;

class ContactMeController extends Controller
{

    public function create()
    {
        return view('site.contact.form');
    }

    public function store(Request $request)
    {
        // validate
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|min:10|max:1000',
        ]);

        // send the mail
        $admin = \App\Models\User::where('email', ['nico@deblauwe.be'])->first();
        $admin->notify(new ContactMe($request->email, $request->message));

        // redirect
        return redirect()->route('contact.create');
    }
    //
}
