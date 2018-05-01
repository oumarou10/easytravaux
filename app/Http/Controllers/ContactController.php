<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.form');
    }

    public function store(ContactRequest $request)
    {
        $mailable = new ContactMessageCreated($request->name, $request->telephone, $request->email, $request->message);
        Mail::to('nibonx75@yahoo.fr')->send($mailable);
        flashy('Votre message a bien été envoyé');
        return redirect()->route('home');
    }
}
