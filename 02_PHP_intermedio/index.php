<?php 

    require_once "consts.php"; // Importamos el archivo de constantes
    require_once "02_functions.php"; // Importamos el archivo de funciones

    $data = get_data(API_URL);
    $untilMessage = get_until_message($data["days_until"]);
?>

<?php render_template('head', $data); ?>
<?php render_template('main', $data); ?>
<?php render_template('styles'); ?>
