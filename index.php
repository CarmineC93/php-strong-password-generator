<!-- **Milestone 1**
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->

<?php
include __DIR__ . "/partials/functions/functions.php";
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