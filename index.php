<!-- spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->
<?php    include './function.php'; ?>
    
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
            <input type="number" min="1" max="67" name="length-password" class="form-control col-3" placeholder="scegli lunghezza password">
            <button class="btn btn-primary mt-3">Genera</button>
        </form>

        <div class="card p-2 mt-4">
            <?php foreach ($password as $value): ?>
                <?php echo implode($value) ?>
            <?php endforeach; ?>
        </div>
    
    </div>

    <!-- js cdn bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>