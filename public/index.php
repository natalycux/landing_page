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
</head>
<body>



<?php
require __DIR__ . '/../config/config.php';
?>
<?php include BASE_PATH . '/app/templates/header.php'; ?>


<section class="testimonials-section py-5">
    <div class="container-fluid">
        <h2 class="text-center mb-5">What our customers say</h2>
        <div class="row justify-content-center">
            
        <div class="col-md-4 col-6 mb-4">
    <div class="testimonial-card p-4">
        <div class="testimonial-text">
            <p>"I learned a lot in a short time. Now I can create web applications from scratch."</p>
        </div>
        <div class="testimonial-author">
            <h5 class="mt-3">Michael Brown</h5>
            <p class="text-muted">Student</p>
        </div>
    </div>
</div>

        </div>
    </div>
</section>


</body>
</html>