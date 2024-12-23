<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composition du plat</title>
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
    <h1>Composition du plat : {{ $plat->intitule }}</h1>

    @if ($compositions->isEmpty())
        <p>Aucun composant trouvé pour ce plat.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libellé</th>
                    <th>Quantité</th>
                    <th>Unité</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compositions as $composant)
                    <tr>
                        <td>{{ $composant->id }}</td>
                        <td>{{ $composant->libelle }}</td>
                        <td>{{ $composant->pivot->quantite }}</td>
                        <td>{{ $composant->pivot->unite }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
