<?php
session_start();

$password = $_SESSION["password"];

var_dump($password);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Password</title>

</head>

<body>
    <H1> <?php echo $password ?> </H1>

    <a href="index.php">CREA NUOVA PASSWORD</a>

</body>

</html>