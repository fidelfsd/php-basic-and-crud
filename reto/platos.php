<?php
require_once 'controllers/plate-controller.php';

try {
    $platos = PlateController::getAll();
    console_log($platos);
} catch (\Throwable $th) {
    console_log('Error al leer los platos');
}

?>


<h3>Platos</h3>
<ul>
    <?php foreach ($platos as $plato) { ?>
        <li>
            <a href="detalle.php?id=<?= $plato['id'] ?>">
                <?= $plato['titulo'] ?>
            </a>
        </li>
    <?php } ?>
</ul>