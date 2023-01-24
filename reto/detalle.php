<?php
require_once 'controllers/plate-controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include_once 'header.php'; ?>

    <?php
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $plato = PlateController::getById($id);
        //

    ?>
        <div class="plato-card">
            <h2> <?= $plato['titulo']; ?></h2>
            <div> tipo: <?= $plato['tipo']; ?> </div>
            <div> <?= $plato['comensales']; ?> comensales </div>
            <div> <?= $plato['precio']; ?> €</div>
        </div>
    <?php

    } else {
        echo '<script>window.location.replace("/reto")</script>';
    }
    ?>

    <?php include_once 'footer.php'; ?>
</body>

</html>