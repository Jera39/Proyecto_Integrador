<?php

function obtenerAforo() {
        include __DIR__ . '/conexion.php';

    try {
        //ob_start();
        // Realiza la consulta SQL para obtener el valor del contador desde la tabla "Aforo"
    $query = 'SELECT "Contador" FROM "Aforo"';
        $result = $db->query($query);

        if ($result !== false) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                // Imprime el valor del contador en pantalla
                
                $contador = $row['Contador'];

                // Crear un arreglo asociativo con el valor del contador
                //$data = array("contador" => $contador);
                //ob_end_clean();
                // Imprimir el valor como JSON
                //header('Content-Type: application/json');
                //echo json_encode(array('contador' => $contador));
                //echo json_encode($data);
                // echo "Contador: " . $row['Contador'];
                header('Content-Type: application/json');
                echo json_encode(array('contador' => $contador));
            } else {
                echo "No se encontraron registros en la tabla 'Aforo'.";
            }
        } else {
            echo "Error al ejecutar la consulta SQL.";
        }
    } catch (PDOException $e) {
        echo "Error al conectar a la base de datos: " . $e->getMessage();
    }
}

obtenerAforo();





?>