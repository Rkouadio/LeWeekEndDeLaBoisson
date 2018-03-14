<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class divertissement extends Model
{
    protected $fillable = [
        'intitule', 'description', 'categorie'
    ];
}
