<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code_postal', 'type_appartement', 'prestations', 'message', 'surface', 'email', 'telephone'
    ];

    protected $table = 'devis';
}
