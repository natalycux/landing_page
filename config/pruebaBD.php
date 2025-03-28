<?php
require_once 'database.php';

try {
    $db = Database::connect();
    if ($db) {
        echo "✅ Conexión exitosa a la base de datos.";
    } else {
        echo "❌ No se pudo conectar a la base de datos.";
    }
} catch (Exception $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
