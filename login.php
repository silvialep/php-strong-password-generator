<?php


session_start();

if (!isset($_SESSION['rndPsw'])) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
</head>

<body>
    <div>
        <h4>Ecco la tua password: <?= $_SESSION['rndPsw'] ?></h4>
        <a href="index.php">Torna alla homepage</a>
    </div>



</body>

</html>