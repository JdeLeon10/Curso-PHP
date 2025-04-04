<?php declare(strict_types=1);
    
    function get_data(string $url): array {
        $result = file_get_contents($url);
        $data = json_decode($result, true);
        return $data;
    }

    function get_until_message(int $days): string {
        // if ($days < 0) {
        //     return "Ya se estreno";
        // } elseif ($days == 0) {
        //     return "Hoy se estrena";
        // } else {
        //     return "Faltan $days dias para el estreno";
        // }
        return match (true){
            $days < 0  => "Ya se estreno",
            $days == 0 => "Hoy se estrena",
            $days < 7  => "Esta semana se estrena",
            $days < 30 => "Este mes se estrena",
            default    => "Faltan $days dias para el estreno"
        };
    }