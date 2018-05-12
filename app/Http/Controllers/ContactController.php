<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.form');
    }

    public function store(ContactRequest $request)
    {
        $message = Contact::create($request->only('name', 'telephone', 'email', 'message'));

        $mailable = new ContactMessageCreated($message);
        Mail::to('nibonx75@yahoo.fr')->send($mailable);
        flashy('Votre message a bien été envoyé, sera traité sous 48h');
        return redirect()->route('home');
    }
}
