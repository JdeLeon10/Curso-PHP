<?php

    // Creacion de variables en PHP
    $nombre = "Jeremy";
    $edad = 22;
    $bool = true; // Se muestra como un 1
    $double = 6.5;

    // Imprimir variables
    echo $nombre . "<br>";
    echo $edad . "<br>";
    echo $bool . "<br>";
    echo $double . "<br>";

    // Concatenacion de variables
    $concat1 = "Hola";
    $concat2 = "Mundo";
    echo $concat1 . " " . $concat2 . "<br>";
    // Interpolacion de variables
    echo "Mi nombre es: $nombre y tengo $edad años <br>";

    // Declaracion de constantes
    const MI_CONSTANT = "Esta es una constante";
    echo MI_CONSTANT . "<br>";

    // Operaciones aritmeticas
    $num1 = 10;
    $num2 = 5;
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;
    $mod = $num1 % $num2;
    echo "Suma: $suma <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicacion: $mult <br>";
    echo "Division: $div <br>";
    echo "Modulo: $mod <br>";

    // Estructura de control if
    $num = 10;
    if($num > 5){
        echo "El numero es mayor a 5 <br>";
    }else{
        echo "El numero es menor a 5 <br>";
    }

    // Estructura de control while
    $i = 0;
    while($i < 5){
        echo "El valor de i es: $i <br>";
        $i++;
    }

    // Estructura de control switch
    $dia = "Lunes"; // Modificacion de dia para probar los diferentes casos
    switch($dia){
        case "Lunes":
            echo "Hoy es Lunes <br>";
            break;
        case "Martes":
            echo "Hoy es Martes <br>";
            break;
        case "Miercoles":
            echo "Hoy es Miercoles <br>";
            break;
        case "Jueves":
            echo "Hoy es Jueves <br>";
            break;
        case "Viernes":
            echo "Hoy es Viernes <br>";
            break;
        case "Sabado":
            echo "Hoy es Sabado <br>";
            break;
        case "Domingo":
            echo "Hoy es Domingo <br>";
            break;
        default:
            echo "No es un dia de la semana <br>";
            break;
    }

    // Estructura de control for
    for($i = 0; $i < 5; $i++){
        echo "El valor de i es: $i <br>";
    }

    // Creacion de un arreglo // lista
    $arreglo = array("Jeremy", 22, true, 6.5);
    // Imprimir un arreglo
    echo $arreglo[0] . "<br>";
    echo $arreglo[1] . "<br>";
    echo $arreglo[2] . "<br>";
    echo $arreglo[3] . "<br>";
    // Añadir un elemento push
    array_push($arreglo, "Nuevo elemento");
    array_push($arreglo, "Nuevo elemento2");
    // Añadir sin indice ni metodo push, podria ponerse un indice en especifico
    $arreglo[] = "Elemento añadido"; // Modificacion
    // Eliminar un elemento
    unset($arreglo[4]);
    // Imprimir todo el arreglo
    print_r($arreglo) . "<br>";
    echo "<br>";
    // Recorrer un array con foreach
    foreach($arreglo as $elemento){
        echo $elemento . "<br>";
    }

    // Creacion de diccionarios // objetos // Clave - Valor
    $diccionario = array(
        "nombre" => "Jeremy",
        "edad" => 22,
        "isDev" => true,
        "double" => 6.5);
    // Imprimir un diccionario
    echo $diccionario["nombre"] . "<br>";
    echo $diccionario["edad"] . "<br>";
    echo $diccionario["isDev"] . "<br>";
    echo $diccionario["double"] . "<br>";
    // Añadir un elemento
    $diccionario["nuevo"] = "Nuevo elemento";
    // Eliminar un elemento
    unset($diccionario["nuevo"]);
    // Imprimir todo el diccionario
    print_r($diccionario) . "<br>";

    // Creacion de un objeto
    $objeto = (object)[
        "nombre" => "Jeremy",
        "edad" => 22,
        "isDev" => true,
        "double" => 6.5];
    // Imprimir un objeto
    echo $objeto->nombre . "<br>";
    echo $objeto->edad . "<br>";
    echo $objeto->isDev . "<br>";
    echo $objeto->double . "<br>";
    // Añadir un elemento
    $objeto->nuevo = "Nuevo elemento";
    // Eliminar un elemento
    unset($objeto->nuevo);
    // Imprimir todo el objeto
    print_r($objeto) . "<br>";
?>