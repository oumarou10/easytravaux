<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index()
    {
        $prestations = ['peinture', 'renovation sol', 'renovation salle de bain'];
        return view ('devis.form', ['prestations' => $prestations]);
    }

    public function store()
    {
        dd('die');
    }
}
