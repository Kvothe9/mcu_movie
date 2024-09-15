<?php  

        declare(strict_types=1);

        function render_template (string $template, array $data = []){
            extract($data);
            require "templates/$template.php";
        }

        function get_data(string $url): array {
            $result = file_get_contents($url);
            $data = json_decode($result, true);
            return $data;

        }

        function get_until_message (int $days): string {
            return match (true){
                $days === 0 => "¡Hoy es el estreno!",
                $days === 1 => "Mañana es el estreno",
                $days < 7   => "Se estrena esta semana",
                $days < 30  => "Se estrena este mes",
                default     => "$days días para el estreno"
            };
        }

        



       /* // Mostrar los datos (ejemplo simplificado)
        if (!empty($data)) {
            echo "<pre>" . htmlspecialchars(print_r($data, true)) . "</pre>";
        } else {
            echo "<p>No se encontraron datos.</p>";
        }
*/
 ?>
