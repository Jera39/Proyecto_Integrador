<?php
include __DIR__ . '/conexion.php';

try {
    // Realiza la consulta SQL para obtener el valor del contador desde la tabla "Aforo"
$query = 'SELECT "Contador" FROM "Aforo"';
    $result = $db->query($query);

    if ($result !== false) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            // Imprime el valor del contador en pantalla
            echo "Contador: " . $row['Contador'];
            $total = 20;

            // Formatea el valor para mostrarlo como "contador/total"
            $formattedValue = $contador . '/' . $total;

            // Imprime el valor formateado en el elemento HTML
            echo 'Contador: ' . $formattedValue;
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