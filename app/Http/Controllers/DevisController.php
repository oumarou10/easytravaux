<?php

namespace App\Http\Controllers;

use App\Devis;
use App\Http\Requests\DevisRequest;

class DevisController extends Controller
{
    public function index()
    {
        $items = ['Chambre', 'Cuisine', 'Salle de Bain', 'Salon', 'Autres'];

        $prestations = [
            'Electricité', 'Fenêtres', 'Travaux de peinture',
            'Moquette-lino', 'Pose de papier peint',
            'Rénovation sol', 'Rénovation salle de bain',
            'Toutes types de rénovations sol - mur','Autres'
        ];

        return view ('devis.form', compact('prestations','items'));
    }

    public function store(DevisRequest $request)
    {
        Devis::create($request->only('type_appartement', 'code_postal', 'prestations', 'surface', 'message'));

        flashy('Votre devis a bien été envoyé, nous revenons vers vous dans les plus brefs délai');
        return redirect()->route('home');
    }
}
