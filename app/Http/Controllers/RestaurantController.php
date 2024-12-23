<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Plat;
use App\Models\Serveur;
use App\Models\Commande;

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

    public function cmd(Serveur $serveur){
        $commandes = $serveur->commandes()->where('etat', 'en cours')->get();
        return view('restaurant.commandes', compact('commandes', 'serveur'));
    }

    public function PlatCmd(Commande $commande){
        $plats = $commande->plats; // Si la relation est définie dans le modèle Commande
        return view('restaurant.platsCommande', compact('plats', 'commande'));
    }

    public function PlatsCmdd(){
        $plats = Plat::whereHas('commandes', function ($query) {
            $query->where('etat', 'en cours');
        })->get();
        return view('restaurant.platsCmdd', compact('plats'));
    }

    public function ServNon(){
        $commandes = Commande::where('etat', 'servi')->where('payé', 0)->get();
        return view('restaurant.servNon', compact('commandes'));
    }

    public function plusFivePlats(){
        $commandes = Commande::whereHas('plats', function ($query) {
            $query->groupBy('commande_id')->havingRaw('COUNT(*) > 5');
        })->get();
        return view('restaurant.plusFivePlats', compact('commandes'));
        
    }

    public function NbrTotal($serveurId)
{
    // Calculer la date d'hier
    $hier = now()->subDay()->toDateString(); // Format 'Y-m-d'

    // Récupérer le nombre de commandes affectées hier à un serveur donné
    $nombreCommandesHier = Commande::whereDate('created_at', $hier)
                                   ->where('serveur_id', $serveurId)
                                   ->count();  // Utilisez count() pour obtenir le nombre total de commandes

    // Passer la variable au vue
    return view('restaurant.NbrTotal', compact('nombreCommandesHier'));
}
public function montantTotalCommande($commandeId)
{
    // Récupérer la commande
    $commande = Commande::findOrFail($commandeId);

    // Calculer le montant total en sommant (prix * quantité) de chaque plat associé à la commande
    $montantTotal = $commande->plats->sum(function ($plat) {
        return $plat->pivot->nombre * $plat->prix;
    });

    // Passer la commande et le montant total à la vue
    return view('restaurant.montantTotal', compact('commande', 'montantTotal'));
}



}
