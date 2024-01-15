<?php
require __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce animali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Prodotti per animali:</h1>
        </div>
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $product->name ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= $product->description ?>
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= $product->price ?> $
                            </h6>
                            <p class="card-text">
                                <h6>Categoria:</h6><?= $product->category->animalName ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
</body>

</html>