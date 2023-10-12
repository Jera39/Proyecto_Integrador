<?php
$host = 'db.brieuupydnadfyfdbaes.supabase.co';
$port = '5432';
$dbname = 'postgres';
$user = 'postgres';
$password = 'nhYxAJ6hX4U9XD9X';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos x: " . $e->getMessage();
}
?>