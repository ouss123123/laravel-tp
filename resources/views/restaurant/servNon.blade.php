<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes Non Payées</title>
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
    <h1>Commandes Non Payées</h1>

    @if ($commandes->isEmpty())
        <p>Aucune commande non payée.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID Commande</th>
                    <th>Numéro Table</th>
                    <th>Etat</th>
                    <th>Montant Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                    <tr>
                        <td>{{ $commande->id }}</td>
                        <td>{{ $commande->numero_table }}</td>
                        <td>{{ $commande->etat }}</td>
                        <td>{{ $commande->total }} MAD</td> <!-- Vous devez calculer ou avoir une méthode pour obtenir le total -->
                        <td>
                            @if ($commande->payé == 0)
                                <span style="color: red;">Non Payée</span>
                            @else
                                <span style="color: green;">Payée</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>
