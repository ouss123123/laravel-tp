<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serveur extends Model
{
    protected $fillable = ['nom', 'date_embauche'];

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}

