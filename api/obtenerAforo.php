<?php
require_once 'conexion.php';

try {
    // Realiza la consulta SQL para obtener el valor del contador desde la tabla "Aforo"
$query = 'SELECT "Contador" FROM "Aforo"';
    $result = $db->query($query);

    if ($result !== false) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            // Imprime el valor del contador en pantalla
            echo "Contador: " . $row['Contador'];
        } else {
            echo "No se encontraron registros en la tabla 'Aforo'.";
        }
    } else {
        echo "Error al ejecutar la consulta SQL.";
    }
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>