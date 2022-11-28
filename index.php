<?php
include __DIR__ . "/partials/functions/functions.php";
session_start();

$password_length = $_GET["length"];
$password_length = intval($password_length);
var_dump($password_length);


$passwordReady = generatePassword($password_length);
$_SESSION["password"] = generatePassword($password_length);

var_dump($_SESSION["password"]);

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

    <a href="password.php">CLICCA PER VEDERE LA TUA PASSWORD</a>


</body>

</html>