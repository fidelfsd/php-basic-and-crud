<?php

declare(strict_types=1);
require_once __DIR__ . '/../db/db.php';

class PlateController
{
    public static function getAll()
    {
        global $conn;

        $query = "SELECT * FROM platos";
        $result = $conn->query($query);

        /** usando fecth */
        // $platos = [];
        // while ($fila = $result->fetch(PDO::FETCH_ASSOC)) {
        //     $platos[] = $fila;
        // }

        /** usando fecthAll */
        $platos = $result->fetchAll(PDO::FETCH_ASSOC);

        return $platos;
    }

    public static function getById(int $id)
    {
        global $conn;

        $query = "SELECT * FROM platos WHERE id=$id";
        $result = $conn->query($query);

        $plato = $result->fetch(PDO::FETCH_ASSOC);

        return $plato;
    }

    public static function insert(array $plato)
    {
        global $conn;

        $titulo = $plato['titulo'];
        $comensales = $plato['comensales'];
        $tipo = $plato['tipo'];
        $precio = $plato['precio'];

        $query = "INSERT INTO platos (titulo, comensales, tipo, precio) VALUES ('$titulo', $comensales, '$tipo', $precio)";
        $conn->query($query);
    }
}
