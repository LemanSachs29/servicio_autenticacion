<?php
session_start();

if (isset($_SESSION["user"])) {
    header('Location: no_permisos.php');
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: sesion.php");
    exit();
}

$user = $_SESION['user'];
$time = $_SESSION['time'];
$estado = $_SESSION['msg'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>

<body>
    <h1>Bienvenido a tu sesión!</h1>
    <div>
        <img src="https://placehold.co/100x100" alt="placeholder">
        <p><?php echo $user ?></p>
        <p><?php echo $estado ?></p>
        <p><?php echo $time ?></p>
        <a href="?logout=true">Cerrar sesión</a>
    </div>
</body>

</html>