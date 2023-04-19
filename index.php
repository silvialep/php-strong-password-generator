<?php


$passwordLength = $_GET['passlen'] ?? 'false';

// var_dump($_GET['passlen']);

function randomPassword($passwordLength) {
      $rpsw = '';
      $source = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890|@#~$%()=^*+[]{}-_';
      
      for($i = 1; $i <= $passwordLength; $i++) {
        //Generate a random index based on the string in question.
        $randomIndex = mt_rand(0, strlen($source) - 1);

        //Print out the random character.
        $newChar = $source[$randomIndex];

        $rpsw .= $newChar;
      }
      return $rpsw;
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

    <form action="index.php" method="GET">
        <input style="width: 400px;" name="passlen" type="number" placeholder="Inserisci la lunghezza della password che vuoi generare">
        <input type="submit">
    </form>

    <?php
    if($passwordLength != 'false' && $passwordLength != '') {
        ?>

        <div>
            <hr>
            <h4>Ecco la tua password: <?php echo randomPassword($passwordLength) ?></h4>
        </div>

        <?php

        

        
    }
    ?>
    
    
</body>
</html>

<!-- 
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. -->
