<!-- spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->
<?php 
    $length_password = (int) $_GET['length-password'] ?? '';
    //var_dump($length_password);

    $password = [];
    $password[] = generatePassword($password, $length_password);

    /*
    Una nostra funzione utilizzerà questo dato per generare una password casuale 
    (composta da lettere, lettere maiuscole, numeri e simboli).
    */
    
    function generatePassword($array, $lenght){
        
        #genero array per comporre in maniera casuale la password
        $numbers = range(0, 9);
        $alfabet_alpha = range('A', 'z');

        # integro nell'array principale anche i numeri
        for ($i=0; $i < sizeof($numbers) ; $i++) { 
            $alfabet_alpha[] = $numbers[$i];    
        };
        
        $alfabet_alpha = str_replace(["^", "`", "="], ["#","&","£"], $alfabet_alpha);
        
        while (count($array) < $lenght) {
            $index = rand(0, sizeof($alfabet_alpha));
            $array[] = $alfabet_alpha[$index];
        }
        
        return $array;
    };