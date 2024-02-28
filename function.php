<?php 
    $length_password = (int) $_GET['length-password'] ?? '';
    var_dump($length_password);

    $password = [];
    $password[] = generatePassword($password, $length_password);

    /*
    Una nostra funzione utilizzerà questo dato per generare una password casuale 
    (composta da lettere, lettere maiuscole, numeri e simboli).
    */
    
    function generatePassword($array, $lenght){
        
        $numbers = range(0, 9);
        $alfabet_alpha = range('A', 'z');
        $alfabet_alpha = str_replace(["^", "`", "="], ["#","&","£"], $alfabet_alpha);
        var_dump(sizeof($alfabet_alpha));

        
        while (count($array) < $lenght) {
                $index = rand(0, 57);
                $array[] = $alfabet_alpha[$index];
            }
            return $array;
    };