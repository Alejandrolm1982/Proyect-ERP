<?php

require_once 'Models/LoginModel1.php';
require_once 'Controllers/LoginController1.php';

$userController = new UserController();
$userController->procesarFormulario();

?>