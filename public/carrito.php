
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



<?php if (empty($cartCourses)) : ?>
    <p>Your cart is empty.</p>
    

<?php else : ?>
    <div class="container my-5">
    <h1 class="text-center">Shopping Cart</h1>
    
    <?php if (empty($cartCourses)) : ?>
        <p class="text-center">Tu carrito está vacío.</p>
    <?php else : ?>
        <div class="row g-4">
            <?php foreach ($cartCourses as $course) : ?>
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($course['title']); ?></h5>
                            <p class="text-muted">Precio: <strong>$<?php echo htmlspecialchars($course['price']); ?></strong></p>
                            <button class="btn btn-info" onclick="toggleDetails(<?php echo $course['id']; ?>)">Ver más</button>
                            <div id="details-<?php echo $course['id']; ?>" class="course-details mt-3 p-3 bg-light border rounded">
                                <p><strong>Descripción:</strong> <?php echo htmlspecialchars($course['description']); ?></p>
                                <p><strong>Categoría:</strong> <?php echo htmlspecialchars($course['category']); ?></p>
                                <p><strong>Fecha:</strong> <?php echo htmlspecialchars($course['created_at']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
<?php endif; ?>



<script>
    function toggleDetails(courseId) {
        let details = document.getElementById("details-" + courseId);
        details.style.display = details.style.display === "none" ? "block" : "none";
    }
</script>

    <?php include __DIR__ . '/../app/templates/footer.php'; ?>
</body>
</html>
