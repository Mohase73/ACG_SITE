<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Mail</title>
</head>
<body>
    <div class="text-center">
        <h2>Salue</h2> <br><br>
    </div>

Vous avez reçu un e-mail de : {{ $name }} <br><br>

Détails de l'utilisateur: <br><br>

<p>Name: {{ $name }}</p> <br>
<p>Email: {{ $email }}</p> <br>
<p>Phone: {{ $phone }}</p> <br>
<p>Subject: {{ $subject }}</p> <br>
<p>Message: {{ $user_query }}</p><br><br>

Merci pour votre compréhension
</body>
</html>
