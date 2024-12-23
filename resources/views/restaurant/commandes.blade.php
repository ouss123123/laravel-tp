<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes du Serveur</title>
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
    <h1>Commandes de {{ $serveur->nom }}</h1>

    @if ($commandes->isEmpty())
        <p>Aucune commande n'a été enregistrée pour ce serveur.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numéro de table</th>
                    <th>État</th>
                    <th>Payé</th>
                    <th>Date de création</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                    <tr>
                        <td>{{ $commande->id }}</td>
                        <td>{{ $commande->numero_table ?? 'N/A' }}</td>
                        <td>{{ ucfirst($commande->etat) }}</td>
                        <td>{{ $commande->payé ? 'Oui' : 'Non' }}</td>
                        <td>{{ $commande->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
