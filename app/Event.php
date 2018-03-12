<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'dateDebut', 'dateFin', 'intitule', 'description', 'lieu', 'typeEvenement'
    ];
}
