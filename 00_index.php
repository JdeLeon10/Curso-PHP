<?php
    #Creacion de variables
    #Inicializacion en consola php -S localhost:8000 00_index.php, en este caso mandamos el nombre del archivo
    $name = "Jeremy";
    $age = 22;
    $isDev = true;
    $age2 = 1;
    $ageConcat = $age . $age2;
    $concat1 = "Hola";
    $concat2 = "Mundo";

    var_dump($name); #Devuelve el tipo de dato y valor
    var_dump($age);
    var_dump($isDev);
    echo gettype($name);
    echo is_numeric($age);
    echo is_bool($isDev);
?>

<h1>
    <?php echo "Mi primera app <br>";?>
    <?= "Mi segunda app <br>"; ?>
    <?= "Mi nombre es: $name y tengo $age años <br>"; ?>
    <?= "Concatenacion de variables: $ageConcat; <br>" ?>
    <?= "Concatenacion de variables 2: " .$concat1 . " " . $concat2; ?>
</h1>

<style>

    :root{
        color-scheme: black;
    }

    body{
        display: grid;
        place-content: center;
    }

</style>