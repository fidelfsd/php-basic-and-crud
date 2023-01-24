<?php

declare(strict_types=1);
include_once 'reto/_utilities/console.php';

echo 'Hola mundo';

?>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima dolor officiis amet quasi excepturi quos dolore sit eaque placeat eos incidunt accusantium reprehenderit a praesentium laborum, eveniet dolorem beatae possimus?</p>


<?php

// imprimir con echo 
//----------------------------------

print_r([1, 2, 3]);
echo '<hr>';
$name = 'Roberto';
$Nombre = 'Juan';
echo "$name, $Nombre";

// numericos
//----------------------------------
echo '<br>';
$num = 0xFF; // hexadecimal
echo $num;


$num2 = 1.2e-9; // cientifico
echo '<br>';
echo $num2;

// constantes
//----------------------------------
echo '<hr>';
define("NOMBRE", "Juan");
define("CURSOS", ["PHP", "JS", "JAVA"]);
echo NOMBRE;
echo "<br>";
echo CURSOS[1];

const PI = 3.14;
echo "<br>";
echo "<br>";
echo PI;

// constantes de PHP
//----------------------------------
echo '<hr>';
echo "Versión de php: " . PHP_VERSION;
echo "<br>";
echo "Sistema: " . PHP_OS;
echo "<br>";
echo 'dir:' . __DIR__;
echo "<br>";
echo 'file:' . __FILE__;
echo '<hr>';

// arrays
//----------------------------------

$arrayMix = [
    "Bob",
    "foo" => "bar",
    "Alice",
    42 => 24,
    "Jhon",
    "multi" => [
        "dimensional" => [
            "array" => "foo"
        ]
    ]
];
print_r($arrayMix["foo"]);
echo '<br>';
print_r($arrayMix[0]);
echo '<br>';
print_r($arrayMix["multi"]["dimensional"]["array"]);

echo '<pre>' . print_r($arrayMix, true) . '</pre>';


// recorrer arrays
foreach ($arrayMix as $key => $value) {

    if (!is_array($value)) {
        echo $key . ' - ' . $value;
        echo '<br>';
    } else {
    }
}

echo '<hr>';

// recorrer arrays
$frutas = [100, 200, 300, 400];
foreach ($frutas as $k => $fruta) {

    echo $k . ' - ' . $fruta;
    echo '<br>';
}


// funciones con valor por defecto 
//----------------------------------
echo '<hr>';
function hacer_yogur($sabor, $tipo = "acidófilo")
{
    return "Hacer un tazón de yogur $tipo de $sabor.\n";
}
echo hacer_yogur("frambuesa"); // no funcionará como


// manipulacion de strings 
//----------------------------------
echo '<hr>';
$url = "https://platzi.com/blog/como-instalar-zsh-en-windows/";

$parse = parse_url($url);
echo '<pre>';
print_r($parse, false);
echo '</pre>';


$path_trim = trim($parse['path'], '/');
echo '<pre>';
print_r(explode('/', $path_trim), false);
echo '</pre>';


echo '<pre>';
print_r($_SERVER, false);
echo '</pre>';


// tipos de datos en funciones 
//----------------------------------

function sum($a, $b): int
{
    return $a + $b;
}
var_dump(sum(1, 2));
//var_dump(sum(1, 2.5));

echo '<hr>';


// ambito de las variables, ambito global
//----------------------------------

$a = 1; /* ámbito global */
function test()
{
    global $a;
    echo $a;
    /* referencia a una variable del ámbito local */
}
test();
