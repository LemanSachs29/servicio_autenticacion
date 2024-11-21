<?php
session_start();

if (!isset($_SESSION["user"])) {
    header('Location: no_permisos.html');
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
$time = $_SESSION['time'];
$estado = $_SESSION['msg'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <!-- Enlace a Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <!-- Card de bienvenida -->
                <div class="card text-center shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h1 class="h5">¡Bienvenido a tu sesión!</h1>
                    </div>
                    <div class="card-body">
                        <!-- Imagen de perfil -->
                        <img src="https://placehold.co/100x100" alt="placeholder" class="rounded-circle mb-3">

                        <!-- Información del usuario -->
                        <p class="mb-1"><strong>Usuario:</strong> <?php echo $user; ?></p>
                        <p class="mb-1"><strong>Estado:</strong> <?php echo $estado; ?></p>
                        <p><strong>Hora de inicio:</strong> <?php echo $time; ?></p>

                        <!-- Botón para cerrar sesión -->
                        <a href="?logout=true" class="btn btn-danger btn-sm mt-3">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>