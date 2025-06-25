<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
    <p>{{ $messag }}</p>
    <a class="btn btn-info" href="{{ route('verifie.account', $utilisateur->token) }}">Valider votre compte</a>
</body>
</html>