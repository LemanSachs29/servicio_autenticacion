<?php
session_start();
//base de datos ficticia con un único usuario
$usuarios = ["LemanSachs29" => "1234"];

//Comprobamos el método
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Comprobamos que los campos vienen completos
    if (isset($_POST['user'], $_POST['pass']) && !empty(trim($_POST['user'])) && !empty(trim($_POST['pass']))) {
        $user = trim($_POST['user']);
        $pass = trim($_POST['pass']);

        if (isset($usuarios[$user]) && $usuarios[$user] === $pass) {
            $_SESSION['user'] = $user;
            $time = time();
            $_SESSION['time'] = date("d-m-Y (H:i:s)", $time);
            $_SESSION['msg'] = "Las tortillas de patata son todas redondas";
            header("Location: bienvenida.php");
            exit();
        } else {
            echo "error de credenciales";

        }

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Enlace a Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Contenedor principal -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <!-- Card para diseño del formulario -->
                <div class="card shadow-sm">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Inicio de Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <!-- Campo de Usuario -->
                            <div class="mb-3">
                                <label for="user" class="form-label">Usuario:</label>
                                <input type="text" name="user" id="user" class="form-control"
                                    placeholder="Ingresa tu usuario">
                            </div>
                            <!-- Campo de Contraseña -->
                            <div class="mb-3">
                                <label for="pass" class="form-label">Contraseña:</label>
                                <input type="password" name="pass" id="pass" class="form-control"
                                    placeholder="Ingresa tu contraseña">
                            </div>
                            <!-- Botón de envío -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>