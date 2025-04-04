<?php 

    require_once "sections/const.php"; // Importamos el archivo de constantes
    require_once "02_functions.php"; // Importamos el archivo de funciones

    $data = get_data(API_URL);
    $untilMessage = get_until_message($data["days_until"]);
?>

<?php require "sections/head.php"; ?>
<?php require "sections/main.php"; ?>
<?php require "sections/styles.php" ?>