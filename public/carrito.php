
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="/public/assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="/public/assets/js/bootstrap.bundle.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4bb22f668e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/assets/sass/header.css">
    <!-- Estilos adicionales para el footer -->
    <link rel="stylesheet" href="/public/assets/sass/footer.css">
</head>
<body>

<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>



<?php
require_once __DIR__ . '/../config/config.php';
require_once BASE_PATH . '/config/database.php';
?>
<?php include BASE_PATH . '/app/templates/header.php'; ?>


<?php

$jsonFile = 'data.json'; // JSON file containing the data
$data = json_decode(file_get_contents($jsonFile), true);

$purchases = $data['purchases'] ?? [];
$courses = $data['courses'] ?? [];

// Obtener el usuario en sesión (simulación, cambiar según tu login)
$user_id = 1; // Aquí se debe obtener dinámicamente el usuario logueado


// Filtrar los cursos que el usuario ha comprado
$cartCourses = [];

echo "<pre>";
var_dump($cartCourses); // Muestra el contenido del carrito
echo "</pre>";

foreach ($purchases as $purchase) {
    if ($purchase['user_id'] == $user_id) {
        // Buscar el curso correspondiente
        foreach ($courses as $course) {
            if ($course['id'] == $purchase['course_id']) {
                $cartCourses[] = $course;
            }
        }
    }
}

?>


<h1>Shopping Cart</h1>

<?php if (empty($cartCourses)) : ?>
    <p>Your cart is empty.</p>
    
echo "<pre>";
var_dump($cartCourses); // Muestra el contenido del carrito
echo "</pre>";
<?php else : ?>
    <ul>
        <?php foreach ($cartCourses as $course) : ?>
            <li>
                <strong><?php echo htmlspecialchars($course['title']); ?></strong> - 
                <?php echo htmlspecialchars($course['price']); ?> USD
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>





    <?php include __DIR__ . '/../app/templates/footer.php'; ?>
</body>
</html>
