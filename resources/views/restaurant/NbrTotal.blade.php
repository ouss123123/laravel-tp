<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de Commandes Affectées Hier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 18px;
        }
        .result {
            font-weight: bold;
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Nombre de Commandes Affectées Hier</h1>

    <p>Le nombre total de commandes affectées hier au serveur est :</p>

    <div class="result">
        {{ $nombreCommandesHier }}
    </div>

</body>
</html>
