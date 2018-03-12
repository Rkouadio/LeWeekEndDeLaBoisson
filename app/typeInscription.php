<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeInscription extends Model
{
    protected $fillable = [
            'intitule', 'description'
    ];
}
