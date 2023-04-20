<?php

require_once __DIR__ . './partials/functions.php';

session_start();

$rpsw = '';
if(isset($_GET['passlen']) && $_GET['passlen'] >= 4) {
    $rpsw = randomPassword($_GET['passlen']);

    $_SESSION['rndPsw'] = $rpsw;

    header('Location: login.php');
}


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

    <form action="index.php" method="GET">
        <input style="width: 400px;" name="passlen" type="number" min="4" placeholder="Inserisci la lunghezza della password che vuoi generare">
        <input type="submit">
    </form>

    <?php

    if(isset($_GET['passlen']) && $_GET['passlen'] == '') {
        ?>
        <span>Inserisci una lunghezza valida</span>
        <?php
    }


    ?>
 



</body>

</html>

<!-- 
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. -->