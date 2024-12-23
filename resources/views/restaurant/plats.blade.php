<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plats dans la catégorie</title>
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
    <h1>Plats dans la catégorie : {{ $categorie->titre }}</h1>

    @if ($plats->isEmpty())
        <p>Aucun plat disponible dans cette catégorie.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Intitulé</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plats as $plat)
                    <tr>
                        <td>{{ $plat->id }}</td>
                        <td>{{ $plat->intitule }}</td>
                        <td>{{ $plat->description }}</td>
                        <td>{{ $plat->prix }} MAD</td>
                        <td>
                            @if ($plat->photo)
                                <img src="{{ asset('storage/' . $plat->photo) }}" alt="Photo de {{ $plat->intitule }}" width="100">
                            @else
                                Pas de photo
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('restaurant.composition', ['plat' => $plat->id]) }}">Voir la composition</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
