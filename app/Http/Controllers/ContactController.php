<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;
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
        $message = new Contact();
        $message->name = $request->name;
        $message->telephone = $request->telephone;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        $mailable = new ContactMessageCreated($message);
        Mail::to('nibonx75@yahoo.fr')->send($mailable);
        flashy('Votre message a bien été envoyé');
        return redirect()->route('home');
    }
}
