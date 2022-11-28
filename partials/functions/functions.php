<?php

//la funzione prende come parametro la lunghezza scelta dall'utente e restituisce una stringa
function generatePassword($userLength)
{
    $arrayOfCaracters = ["abcdefghjkilmnopqrstuvxywz", "ABCDEFGHIJKLMNOPQRSTUVXYWZ", "1234567890", "!$%&*?-+"];
    $password = "";
    //cicliamo l'array di gruppi di caratteri e le stringhe interne
    for ($i = 0; $i < $userLength; $i++) {
        //preleviamo l'INDICE casuale del gruppo(minuscole, maiuscole, numeri o simboli) dall'array più grande. 
        //-1 perchè ci serve l'ultimo index, non l'ultimo elemento
        $groupOfCaracters = rand(0, count($arrayOfCaracters) - 1);

        //preleviamo l'INDICE del singolo carattere casualmente dal gruppo prelevato prima
        // -1 perchè anche in questo caso ci serve l'indice e non l'ultimo elemento
        $caracter = rand(0, strlen($arrayOfCaracters[$groupOfCaracters]) - 1);

        //ora componiamo la password concatenando i caratteri gli uni agli altri ad ogni ciclo
        //fino a quando non si raggungerà la lunghezza scelta dall'utente
        $password = $password . $arrayOfCaracters[$groupOfCaracters][$caracter];
    };
    //ritorniamo il valore
    return $password;
};

//il valore della funzione sarà inserito in una variabile che stamperemo in pagina
