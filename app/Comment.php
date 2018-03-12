<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected  $fillable = [
       'nom', 'prenoms', 'email', 'message'
    ];
}
