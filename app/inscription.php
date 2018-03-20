<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inscription extends Model
{
    protected $fillable = [
       'nom', 'prenoms', 'email', 'contact', 'adresse', 'motivation', 'type_inscriptions', 'choix', 'organe'
    ];

    public function type_inscriptions()
    {
        return $this->belongsTo(\App\typeInscription::class);
    }
}
