<?php


$passwordLength = $_GET['passlen'] ?? 'false';

function get_rand_pass($passwordLength) {
    if ($passwordLength > 0) {
        $rand_id = "";
        for ($i = 1; $i <= get_rand_pass($passwordLength); $i++) {
            mt_srand((float)microtime() * 1000000);
            $num = mt_rand(1, 36);
            // $rand_id .= assign_rand_value($num);
        }
    }
    return $rand_id;
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
        echo "
        <div>
            <hr>
            <h4>Ecco la tua password: </h4><span>{$passwordLength}</span>
        </div>";
        

        
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
