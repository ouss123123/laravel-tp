<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plats de la Commande</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Plats de la commande {{ $commande->id }}</h1>

    <p><strong>Numéro de table :</strong> {{ $commande->numero_table ?? 'N/A' }}</p>
    <p><strong>État :</strong> {{ ucfirst($commande->etat) }}</p>
    <p><strong>Payé :</strong> {{ $commande->payé ? 'Oui' : 'Non' }}</p>

    <h2>Liste des plats de la commande</h2>

    @if ($plats->isEmpty())
        <p>Aucun plat n'a été ajouté à cette commande.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Intitulé</th>
                    <th>Quantité</th>
                    <th>Prix Unité</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plats as $plat)
                    <tr>
                        <td>{{ $plat->id }}</td>
                        <td>{{ $plat->intitule }}</td>
                        <td>{{ $plat->pivot->nombre }}</td>
                        <td>{{ $plat->prix }} MAD</td>
                        <td>{{ $plat->pivot->nombre * $plat->prix }} MAD</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>
