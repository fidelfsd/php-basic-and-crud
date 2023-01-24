<?php
require_once __DIR__ . '/../_utilities/console.php';

$host = 'db_host'; //usando docker-compose
$port = 3306;
$database = 'crud_php';
$user = 'root';
$password = 'root';

$dsn = "mysql:dbname=$database;host=$host;port=$port";

try {
    $conn = new PDO($dsn, $user, $password);
    console_log("Conectado con la base de datos $database");
} catch (PDOException $e) {
    console_log('Falló la conexión: ' . $e->getMessage());
}
