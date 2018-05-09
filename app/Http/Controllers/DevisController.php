<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevisRequest;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index()
    {
        $items = ['Appartement', 'Cuisine', 'Salle de Bain', 'Salon', 'Autres'];

        $prestations = [
            'Electricité', 'Fenêtres', 'Peinture',
            'Rénovation sol', 'Rénovation salle de bain',
            'Toutes types de rénovations sol - mur','Autres'
        ];

        return view ('devis.form', compact('prestations','items'));
    }

    public function store(DevisRequest $request)
    {
        dd($request);
    }
}
