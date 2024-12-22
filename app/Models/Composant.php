<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Composant extends Model
{
    protected $fillable = ['libelle'];

    public function plats()
    {
        return $this->belongsToMany(Plat::class, 'composant_plat')->withPivot('quantite', 'unite');
    }
}
