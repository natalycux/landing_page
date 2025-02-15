




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Bootstrap 5 CSS local -->
    <link href="/public/assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="/public/assets/js/bootstrap.bundle.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4bb22f668e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/assets/sass/header.css">
    <script src="assets/js/scripts.js"></script>
</head>
<body>



<?php
require_once __DIR__ . '/../config/config.php';
require_once BASE_PATH . '/config/database.php';
?>
<?php include BASE_PATH . '/app/templates/header.php'; ?>

<section class="text-center text-white d-flex justify-content-center align-items-center" style="background: url('assets/pictures/portada.jpg') center/cover; height: 400px;">
    


    <div class="bg-dark bg-opacity-50 p-4 rounded">
        <h1 class="fw-bold">Aprende con los Mejores Cursos</h1>
        <p class="lead">Explora nuestros cursos y mejora tus habilidades hoy mismo.</p>
    </div>
</section>

<div class="container my-5">
    <!-- Sección de cursos -->
    <h2 class="text-center">Cursos Disponibles</h2>
    <div id="courses-container" class="row g-4 justify-content-center"></div>

    <!-- Sección de comentarios -->
    <h2 class="text-center mt-5">Comentarios de la Plataforma</h2>
    <div id="comments-container" class="list-group mt-3"></div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    fetch("data.json")
        .then(response => response.json())
        .then(data => {
            let coursesHtml = "";
            data.courses.forEach(course => {
                coursesHtml += `
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">${course.title}</h5>
                                <p class="card-text">${course.description}</p>
                                <span class="badge bg-primary">${course.category}</span>
                                <p class="text-muted mt-2">Precio: <strong>$${course.price}</strong></p>
                                <p class="small text-muted">Publicado el: ${course.created_at}</p>
                                <button class="btn btn-success">Comprar</button>
                            </div>
                        </div>
                    </div>
                `;
            });
            document.getElementById("courses-container").innerHTML = coursesHtml;

            let commentsHtml = "";
            data.comments.forEach(comment => {
                commentsHtml += `
                    <div class="list-group-item">
                        <p class="mb-1">${comment.comment}</p>
                        <small class="text-muted">Usuario #${comment.user_id}</small>
                    </div>
                `;
            });
            document.getElementById("comments-container").innerHTML = commentsHtml;
        })
        .catch(error => console.error("Error loading data:", error));
});
</script>


</body>
</html>