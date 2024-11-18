<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="POST">
        <label for="user">Usuario:</label><br>
        <input type="text" name="user" id="user"><br>
        <label for="pass">Contraseña:</label><br>
        <input type="password" name="pass" id="pass">
        <input type="submit" value="submit">
    </form>
</body>

</html>

<?php
session_start();
//base de datos ficticia con un único usuario
$usuarios = ["LemanSachs29" => "1234"];

//Comprobamos el método
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Comprobamos que los campos vienen completos
    if (
        isset(
        $_POST['user'],
        $_POST['pass']
    ) &&
        !empty(trim($_POST['user'])) &&
        !empty(trim($_POST['pass']))
    ) {
        $user = trim($_POST['user']);
        $pass = trim($_POST['pass']);
        //Comprobamos la existencia del usuario
        if ($usuarios[$user] == $pass) {
            session_start();
            $_SESSION['user'] = $user;
            $time = time();
            $_SESSION['time'] = date("d-m-Y (H:i:s)", $time);
            $_SESSION['msg'] = "Las tortillas de patata son todas redondas";
            header("Location: bienvenida.php");
            exit();
        } else {
            header('Location: no_permisos.php');
        }
        if ($usuarios[$user] == $pass) {
            $_SESSION['user'] = $user;
            $_SESSION['time'] = date("d-m-Y (H:i:s)", $time);
            $_SESSION['msg'] = "Las tortillas de patata son todas redondas";
            header("Location: bienvenida.php");
            exit();
        } else {
            header("Location: no_permisos.php");
        }

    } else {
        echo "Los campos son obligatorios";
    }

} else {
    echo "Método no soportado";
}



?>