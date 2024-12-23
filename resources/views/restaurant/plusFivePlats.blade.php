<!DOCTYPE html>
<html>
<head>
    <title>Plus Five Plats</title>
</head>
<body>
    <h1>Plus Five Plats</h1>
    @if(isset($commandes) && count($commandes) > 0)
        <ul>
            @foreach($commandes as $commande)
                <li>{{ $commande }}</li>
            @endforeach
        </ul>
    @else
        <p>No commandes found.</p>
    @endif
</body>
</html>