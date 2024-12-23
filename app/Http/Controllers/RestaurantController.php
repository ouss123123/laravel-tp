<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Plat;

class RestaurantController extends Controller
{
    public function platsParCategorie(Category $categorie)
    {
        $plats = Plat::where('categorie_id', $categorie->id)->get();
        return view('restaurant.plats', compact('plats', 'categorie'));
    }
    public function compositionPlat(Plat $plat)
    {
        $compositions = $plat->composants()->withPivot('quantite', 'unite')->get();
        return view('restaurant.composition', compact('plat', 'compositions'));
    }



}
