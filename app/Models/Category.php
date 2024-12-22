<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['titre', 'photo'];

    public function plats()
    {
        return $this->hasMany(Plat::class);
    }
}

