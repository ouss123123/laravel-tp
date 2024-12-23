<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommandePlat extends Model
{
    protected $table = 'commande_plat';
    protected $fillable = ['commande_id', 'plat_id', 'nombre'];
}