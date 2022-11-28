<!-- **Milestone 1**
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->

<?php

$password_length = $_GET["length"];
$password_length = intval($password_length);

var_dump($password_length);

$arrayOfCaracters = ["abcdefghjkilmnopqrstuvxywz", "ABCDEFGHIJKLMNOPQRSTUVXYWZ", "1234567890", "!$%&*?°-+"];


function generatePassword($caractersarray, $userLength)
{
    $caracter = 0;
    while ($caracter < $userLength) {
        $password = "";

        //$random = rand(0, count($caractersarray));
        $randomMinus = $caractersarray[$caracter][rand(0, count($caractersarray[$caracter]))];
        $caracter++;

        $password = $randomMinus;
    };
    return $password;
};

generatePassword($arrayOfCaracters, $password_length);
var_dump($password);

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

    <?php echo $generatePassword ?>
</body>

</html>