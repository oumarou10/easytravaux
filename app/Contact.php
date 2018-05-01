<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'telephone', 'email', 'message'];

    protected $table = 'contact';
}
