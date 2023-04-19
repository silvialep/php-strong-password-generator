<?php


include './partials/functions.php';

?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>

    <h1>Password generator</h1>

    <form action="login.php" method="GET">
        <input style="width: 400px;" name="passlen" type="number" placeholder="Inserisci la lunghezza della password che vuoi generare">
        <input type="submit">
    </form>

    
    
    
</body>
</html>

<!-- 
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. -->
