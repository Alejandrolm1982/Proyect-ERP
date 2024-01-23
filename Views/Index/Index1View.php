<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Assets/css/styleLogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <script src="Assets/js/motor.js"></script>
</head>
<body>
<div class="main">
    <div class="container a-container" id="a-container">
        <form id="a-form" class="form" method="POST/GET" action="/your-registration-endpoint">
            <h2 class="form_title title">Bienvenido</h2>
            <div class="form__icons">
                <!-- Your icon images here -->
            </div>
            <span class="form__span">Usa las credenciales proporcinadas</span>
            <input class="form__input" type="text" placeholder="Name" name="name">
            <input class="form__input" type="password" placeholder="Password" name="password">
            <button type="submit" class="form__button button submit">LOG IN</button>
        </form>
        <a href="./home.php">Home</a>
    </div>

    <div class="container b-container" id="b-container">
        <form id="b-form" class="form" method="POST/GET" action="/your-login-endpoint">
            <h2 class="form_title title">Sign in to Website</h2>
            <div class="form__icons">
                <!-- Your icon images here -->
            </div>
            <input class="form__input" type="text" placeholder="Email" name="email">
            <input class="form__input" type="password" placeholder="Password" name="password">
            <button type="submit" class="form__button button submit">SIGN IN</button>
        </form>
    </div>
</div>

</body>
</html>
