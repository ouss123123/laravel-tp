<!DOCTYPE html>
<html>
<head>
    <title>Montant Total de la Commande</title>
</head>
<body>
    <h1>Montant Total de la Commande</h1>
    <p>Commande ID: {{ $commande->id }}</p>
    <p>Montant Total: {{ number_format($montantTotal, 2) }} €</p>

    <h2>Détails de la Commande</h2>
    <ul>
        @foreach($commande->plats as $plat)
            <li>{{ $plat->nom }} - {{ $plat->pivot->nombre }} x {{ number_format($plat->prix, 2) }} €</li>
        @endforeach
    </ul>
</body>
</html>