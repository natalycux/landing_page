<?php
session_start();

// Obtener el usuario en sesión (en producción usar $_SESSION['user_id'])
$user_id = 1; // Simulado para pruebas

// Leer datos de la petición
$jsonInput = file_get_contents("php://input");
$dataInput = json_decode($jsonInput, true);

// Verificar si se recibió un ID de curso
if (!isset($dataInput['course_id'])) {
    echo json_encode(["success" => false, "message" => "No se recibió el ID del curso."]);
    exit;
}

$course_id = intval($dataInput['course_id']); // Convertir a número

// Leer el archivo JSON
$jsonFile = 'data.json';
$data = json_decode(file_get_contents($jsonFile), true);

// Si no hay compras, inicializar el array
if (!isset($data['purchases'])) {
    $data['purchases'] = [];
}

// Verificar si el curso ya está en el carrito del usuario
foreach ($data['purchases'] as $purchase) {
    if ($purchase['user_id'] == $user_id && $purchase['course_id'] == $course_id) {
        echo json_encode(["success" => false, "message" => "El curso ya está en el carrito."]);
        exit;
    }
}

// Crear una nueva compra
$newPurchase = [
    "id" => count($data['purchases']) + 1, // Nuevo ID basado en la cantidad de compras
    "user_id" => $user_id,
    "course_id" => $course_id,
    "purchase_date" => date("Y-m-d")
];

// Agregar la nueva compra
$data['purchases'][] = $newPurchase;

// Guardar de nuevo en el JSON
file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));

echo json_encode(["success" => true, "message" => "Curso agregado al carrito."]);
exit;
