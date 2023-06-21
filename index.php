<?php
include __DIR__ . '/models/food.php';
include __DIR__ . '/models/category.php';
include __DIR__ . '/models/toy.php';
include __DIR__ . '/models/shelter.php';
include __DIR__ . '/data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
    <link rel="stylesheet" href="/assets/style.css">
    <!-- link di BOOTSTRAP, per accedere alla libreria-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- script con link di BOOTSTRAP, da mettere in fondo al body o nell'head con defer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container">
        <div class="products"><?php
			foreach ($arrProducts as $objProduct) {
				echo $objProduct->printCard();
			} ?>

        </div>
    </div>
</body>

</html>