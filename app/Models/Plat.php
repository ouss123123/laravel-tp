<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $fillable = ['categorie_id', 'intitule', 'description', 'prix', 'photo'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function composants()
    {
        return $this->belongsToMany(Composant::class, 'composant_plat')->withPivot('quantite', 'unite');
    }

    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'commande_plat')->withPivot('nombre');
    }
}

