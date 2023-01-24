<?php

require_once 'controllers/plate-controller.php';

$platos = PlateController::getAll();

echo json_encode($platos);
