<?php 
    $length_password = (int) $_GET['length-password'] ?? '';
    var_dump($length_password);

    $password = [];
    $password[] = generatePassword($password, $length_password);

    $alfabet = range('a', 'z');
    var_dump(implode($alfabet));
    $numbers = range(0, 9);
    var_dump(implode($numbers));
    $alfabet_uppercase = range('A', 'Z');
    var_dump(implode($alfabet_uppercase));

    /*
    Una nostra funzione utilizzerà questo dato per generare una password casuale 
    (composta da lettere, lettere maiuscole, numeri e simboli).
    */
    function generatePassword($array, $lenght){
        while (count($array) < $lenght) {
            $number = rand(0, 9);
            $array[] = $number;
        }
        return $array;
    };

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>

    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <h1>Password Generator</h1>
        <!-- Creare un form che invii in GET la lunghezza della password -->
        <form method="GET" class="form-control">
            <label for="" class="form-label">Inserisci</label>
            <input type="number" min="1" max="10" name="length-password" class="form-control col-3" placeholder="scegli lunghezza password">
            <button class="btn btn-primary mt-3">Invia</button>
        </form>

        <div class="card col-3 p-2">
            <?php foreach ($password as $number): ?>
                <?php echo implode($number) ?>
            <?php endforeach; ?>
        </div>
    
    </div>

    <!-- js cdn bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>