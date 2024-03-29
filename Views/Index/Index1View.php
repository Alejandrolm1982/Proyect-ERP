<?php
// views/formulario.php
include 'controllers/LoginController1.php';
session_start();
$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController->procesarFormulario();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Assets/css/styleLogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <script src="Assets/js/motor.js"></script>
</head>
<body class="body">
    <div class="main">
        <div class="container a-container" id="a-container">
        <form id="loginForm" class="form a-form" method="POST" action="procesarformulario1.php">
            <h2 class="form_title title">Bienvenido</h2>
            <div class="form__icons"></div>
            <span class="form__span">Usa las credenciales proporcionadas</span>

            <input type="hidden" name="action" value="login">

            <input class="form__input" type="text" placeholder="Name" name="username" required>
            <input class="form__input" type="password" placeholder="Password" name="password" required>
            <button type="submit" class="form__button button submit" value="enviar">LOG IN</button>
        </form>

        </div>
    </div>
    <a href="./home.php">Home</a>
</body>
</html>
