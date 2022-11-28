<!-- **Milestone 1**
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->

<?php

$password_length = $_GET["length"];
$password_length = intval($password_length);

var_dump($password_length);

$arrayOfCaracters = ["abcdefghjkilmnopqrstuvxywz", "ABCDEFGHIJKLMNOPQRSTUVXYWZ", "1234567890", "!$%&*?-+"];

//la funzione prende come parametri l'array di gruppi di caratteri e la lunghezza scelta dall'utente

function generatePassword($caractersarray, $userLength)
{
    $password = "";
    //cicliamo l'array di gruppi di caratteri e le stringhe interne
    for ($i = 0; $i < $userLength; $i++) {
        //preleviamo l'INDICE casuale del gruppo(minuscole, maiuscole, numeri o simboli) dall'array più grande. 
        //-1 perchè ci serve l'ultimo index, non l'ultimo elemento
        $groupOfCaracters = rand(0, count($caractersarray) - 1);

        //preleviamo l'INDICE del singolo carattere casualmente dal gruppo prelevato prima
        // -1 perchè anche in questo caso ci serve l'indice e non l'ultimo elemento
        $caracter = rand(0, strlen($caractersarray[$groupOfCaracters]) - 1);

        //ora componiamo la password concatenando i caratteri gli uni agli altri ad ogni ciclo
        //fino a quando non si raggungerà la lunghezza scelta dall'utente
        $password = $password . $caractersarray[$groupOfCaracters][$caracter];
    };
    //ritorniamo il valore
    return $password;
};

//il valore della funzione sarà inserito in una variabile che stamperemo in pagina
$passwordReady = generatePassword($arrayOfCaracters, $password_length);
var_dump($passwordReady);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include __DIR__ . "/form.php" ?>

    <?php echo $passwordReady ?>
</body>

</html>