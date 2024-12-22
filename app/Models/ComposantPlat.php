<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComposantPlat extends Model
{
    protected $table = 'composant_plat';
    protected $fillable = ['composant_id', 'plat_id', 'quantite', 'unite'];
}
