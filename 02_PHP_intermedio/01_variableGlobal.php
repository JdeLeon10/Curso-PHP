<?php
    $name;

    function getName() {
        global $name; // Sin esta instruccion tendriamos un error en donde no se reconoceria la variable
        $name = "Jeremy";
    }
    getName();
?>