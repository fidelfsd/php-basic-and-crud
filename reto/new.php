<?php
require_once 'controllers/plate-controller.php';

if (isset($_POST['insert'])) {

    if (isset($_POST['titulo']) && isset($_POST['tipo']) && isset($_POST['comensales']) && isset($_POST['precio'])) {

        $plato = [
            'titulo' => $_POST['titulo'],
            'comensales' => $_POST['comensales'],
            'tipo' => $_POST['tipo'],
            'precio' => $_POST['precio'],
        ];

        try {
            PlateController::insert($plato);
            console_log('Nuevo plato insertado correctamente');
        } catch (\Throwable $th) {
            console_log('Error al insertar datos');
        }
    }
}

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


    <h2>Insertar nuevo plato</h2>

    <form action="<?= htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="">Título</label><br>
        <input type="text" name="titulo"><br><br>

        <label for="">Tipo</label><br>
        <select name="tipo" id="">
            <option value="entrante">Entrante</option>
            <option value="primero">Primero</option>
            <option value="segundo">Segundo</option>
            <option value="postre">Postre</option>
        </select> <br><br>

        <label for="">Comensales</label><br>
        <input type="number" name="comensales"><br><br>

        <label for="">Precio</label><br>
        <input type="number" step="0.1" name="precio"><br><br>

        <input type="submit" name="insert" value="Enviar">
    </form>


    <?php include_once 'footer.php'; ?>
</body>

</html>