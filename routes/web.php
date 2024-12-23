<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\RestaurantController;

Route::get('/categories/{categorie}/plats', [RestaurantController::class, 'platsParCategorie']);
Route::get('/plats/{plat}/composition', [RestaurantController::class, 'compositionPlat'])->name('restaurant.composition');
route::get('/serveurs/{serveur}/commandes', [RestaurantController::class, 'cmd'])->name('restaurant.commandes');
route::get('/commandes/{commande}/plats', [RestaurantController::class, 'PlatCmd'])->name('restaurant.platsCommande');
route::get('/plats', [RestaurantController::class, 'PlatsCmdd'])->name('restaurant.platsCmdd');
route::get('/commandes', [RestaurantController::class, 'ServNon'])->name('restaurant.servNon');
route::get('/commandes/plusFivePlats', [RestaurantController::class, 'plusFivePlats'])->name('restaurant.plusFivePlats');

route::get('/serveurs/{serveur}/commandesHier', [RestaurantController::class, 'NbrTotal'])->name('restaurant.NbrTotal');

Route::get('/commande/{commandeId}/montant', [RestaurantController::class, 'montantTotalCommande']);
