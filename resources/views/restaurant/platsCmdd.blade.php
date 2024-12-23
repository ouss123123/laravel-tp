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
    <h1>Plats associés à la commande</h1>

    @if ($plats->isEmpty())
        <p>Aucun plat associé à cette commande.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID Plat</th>
                    <th>Intitulé</th>
                    <th>Description</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plats as $plat)
                    <tr>
                        <td>{{ $plat->id }}</td>
                        <td>{{ $plat->intitule }}</td>
                        <td>{{ $plat->description }}</td>
                        <td>{{ $plat->prix }} MAD</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>
