<?php
    const API_URL = "https://whenisthenextmcufilm.com/api";

    // Inicializar una nueva sesion de cURL; ch = cURL_handle
    $ch = curl_init(API_URL);

    // Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Deshabilitar la verificación SSL (solo para desarrollo)
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Ejecutar la peticion y guardar el resultado
    $result = curl_exec($ch);

    // Verificar si hubo errores en la solicitud
    if (curl_errno($ch)) {
        echo "Error en cURL: " . curl_error($ch);
    } else {
        $data = json_decode($result, true);

        // Verificar si la respuesta es válida
        if ($data === null) {
            echo "Error al decodificar JSON: " . json_last_error_msg();
        } else {
            // Linea 28 comentada ya que mostramos la informacion en el main de HTML
            // var_dump($data); // Muestra la respuesta de la API
        }
    }

    // Una alternative serie utilizar file_get_contents
    // $result = file_get_contents(API_URL); // Si solo quiero hacer un GET de una API 

    // Cerrar la sesion del curl
    curl_close($ch);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La proxima pelicula de marvel">
    <title> La proxima pelicula de marvel </title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>

<main>
    <section>
        <img 
            src="<?= $data["poster_url"];?>" width="300" alt="Poster de <?= $data["title"];?>"
            title="Poster de <?= $data["title"];?>" loading="lazy" style="border-radius: 16px"
        />
        <?php
            echo "<h3>Proxima pelicula de marvel: " . $data["title"] . "</h3>";
            echo "<p>Fecha de estreno: " . $data["release_date"] . "</p>";
            echo "<p> Se estrena en: " . $data["days_until"] . " dias" . "</p>";
            echo "<p> Siguiente pelicula: " . $data["following_production"]["title"] . "</p>";
        ?>
    </section>
</main>

<style>
    :root {
        color-scheme: light dark;
    }
    body {
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>