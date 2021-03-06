<?php

namespace App\Http\Controllers;

use App\Devis;
use App\Http\Requests\DevisRequest;
use App\Mail\DevisMessegeCreated;
use Illuminate\Support\Facades\Mail;

class DevisController extends Controller
{
    public function index()
    {
        $items = ['Chambre', 'Cuisine', 'Salle de Bain', 'Salon', 'Autres'];

        $prestations = [
            'Fenêtres', 'Travaux de peinture',
            'Moquette-lino', 'Pose de papier peint',
            'Rénovation sol', 'Rénovation salle de bain',
            'Toutes types de rénovations sol - mur','Autres'
        ];

        return view ('devis.form', compact('prestations','items'));
    }

    public function store(DevisRequest $request)
    {
        $devis = Devis::create($request->only('type_appartement', 'code_postal', 'prestations', 'surface', 'message', 'email','telephone'));

        $mailable = new DevisMessegeCreated($devis);
        Mail::to('nibonx75@yahoo.fr')->send($mailable);
        flashy('Votre devis a bien été envoyé, nous revenons vers vous dans les plus brefs délai');
        return redirect()->route('home');
    }
}
