<?php

include './partials/functions.php'


?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <?php
    if ($passwordLength != 'false' && $passwordLength != '' && $passwordLength > 0) {
    ?>

        <div>
            
            <h4>Ecco la tua password: <?php echo randomPassword($passwordLength) ?></h4>
        </div>

    <?php
    } else {
        echo "Inserisci una lunghezza valida <br><a href='index.php'>Torna alla pagina principale</a>";
    }
    ?>
</body>

</html>