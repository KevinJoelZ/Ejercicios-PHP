<?php

// Programa que verifica la edad de un usuario y muestra un mensaje apropiado 

$edad = 18; 

if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}
?>


<?php

//Programa que evalúa si un número es positivo, negativo o cero

$numero = 5; 

if ($numero > 0) {
    echo "El número es positivo.";
} elseif ($numero < 0) {
    echo "El número es negativo.";
} else {
    echo "El número es cero.";
}
?>


<?php

//Programa que verifica si un usuario tiene permisos de administrador

$esAdmin = true; 

if ($esAdmin) {
    echo "Tienes permisos de administrador.";
} else {
    echo "No tienes permisos de administrador.";
}
?>


<?php

//Programa que verifica si un usuario tiene acceso a cierto contenido basado en su nivel de membresía

$nivelMembresia = 'premium'; 

if ($nivelMembresia == 'premium') {
    echo "Tienes acceso al contenido premium.";
} else {
    echo "No tienes acceso al contenido premium.";
}
?>


<?php

//Programa que toma una calificación del 1 al 5 y muestra un mensaje correspondiente

$calificacion = 4; 

switch ($calificacion) {
    case 1:
        echo "Muy malo.";
        break;
    case 2:
        echo "Malo.";
        break;
    case 3:
        echo "Regular.";
        break;
    case 4:
        echo "Bueno.";
        break;
    case 5:
        echo "Excelente.";
        break;
    default:
        echo "Calificación no válida.";
}
?>


<?php

//Programa que toma un número del 1 al 7 y muestra el día de la semana correspondiente

$dia = 3; 

$diasSemana = ["", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

if ($dia >= 1 && $dia <= 7) {
    echo "El día es: " . $diasSemana[$dia];
} else {
    echo "Número de día no válido.";
}
?>


<?php

//Programa que toma un número del 1 al 12 y muestra el mes correspondiente

$mes = 5; 

$meses = ["", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

if ($mes >= 1 && $mes <= 12) {
    echo "El mes es: " . $meses[$mes];
} else {
    echo "Número de mes no válido.";
}
?>


<?php

//Programa que toma un código de tipo de vehículo y muestra el tipo correspondiente

$codigoVehiculo = 2; 

$tiposVehiculo = [
    1 => "Carro",
    2 => "Motocicleta",
    3 => "Bicicleta",
    4 => "Camión"
];

if (array_key_exists($codigoVehiculo, $tiposVehiculo)) {
    echo "El tipo de vehículo es: " . $tiposVehiculo[$codigoVehiculo];
} else {
    echo "Código de vehículo no válido.";
}
?>


<?php

//Programa que determina si un número es par o impar

$numero = 7; 

if ($numero % 2 == 0) {
    echo "El número es par.";
} else {
    echo "El número es impar.";
}
?>


<?php

//Bucle while que imprime los números del 1 al 10 en orden ascendente

$i = 1;

while ($i <= 10) {
    echo $i . " ";
    $i++;
}
?>


<?php

//Bucle while que imprime los números del 10 al 1 en orden descendente

$i = 10;

while ($i >= 1) {
    echo $i . " ";
    $i--;
}
?>


<?php

//Bucle while que muestra la tabla de multiplicar del 5

$i = 1;

while ($i <= 10) {
    echo "5 x $i = " . (5 * $i) . "<br>";
    $i++;
}
?>


<?php

//Bucle while que suma los primeros 10 números pares y muestra el resultado

$i = 1;
$suma = 0;
$cont = 0;

while ($cont < 10) {
    if ($i % 2 == 0) {
        $suma += $i;
        $cont++;
    }
    $i++;
}

echo "La suma de los primeros 10 números pares es: " . $suma;
?>


<?php

//Programa que calcula el factorial de un número dado

$numero = 5; 
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

echo "El factorial de $numero es: " . $factorial;
?>


<?php

//Bucle for que imprime los números del 1 al 10 en orden ascendente

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
?>


<?php

//Bucle for que imprime los números del 10 al 1 en orden descendente

for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
?>


<?php

//Bucle for que muestra la tabla de multiplicar del 5

for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i) . "<br>";
}
?>


<?php

//Bucle for que suma los primeros 10 números pares y muestra el resultado

$suma = 0;

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        $suma += $i;
    }
}

echo "La suma de los primeros 10 números pares es: " . $suma;
?>


<?php

//Programa que calcula el factorial de un número dado 

$numero = 5; 
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

echo "El factorial de $numero es: " . $factorial;
?>


<?php

//Arreglo con nombres de frutas y muestra cada elemento

$frutas = ["Manzana", "Banana", "Naranja", "Pera", "Uva"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>


<?php

//Programa que suma todos los elementos de un arreglo numérico y muestra el resultado

$numeros = [1, 2, 3, 4, 5];
$suma = 0;

foreach ($numeros as $numero) {
    $suma += $numero;
}

echo "La suma de los elementos del arreglo es: " . $suma;
?>


<?php

//Programa que busca si un nombre específico se encuentra en un arreglo de nombres

$nombres = ["Ana", "Luis", "Carlos", "Maria", "Juan"];
$nombreBuscado = "Carlos";

if (in_array($nombreBuscado, $nombres)) {
    echo "$nombreBuscado se encuentra en el arreglo.";
} else {
    echo "$nombreBuscado no se encuentra en el arreglo.";
}
?>


<?php

//Programa que cuenta y muestra la cantidad de elementos en un arreglo de colores

$colores = ["Rojo", "Verde", "Azul", "Amarillo", "Negro"];
$cantidad = count($colores);

echo "La cantidad de elementos en el arreglo de colores es: " . $cantidad;
?>


<?php

//Programa que ordena alfabéticamente un arreglo de nombres y muestra los nombres ordenados

$nombres = ["Ana", "Luis", "Carlos", "Maria", "Juan"];
sort($nombres);

echo "Los nombres ordenados son:<br>";
foreach ($nombres as $nombre) {
    echo $nombre . "<br>";
}
?>