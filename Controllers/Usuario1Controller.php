<?php 
require'../Models/Usuario1Model.php';
class Usuario1Controller extends Usuario1Model
{
public function index()
{
    require'../Views/Index/Index1View.php';
    /*o ./index.php*/
}
public function Insert()
{
    require'../Views/Usuario/Insert1View.php';
    /*Insert.php*/
}


}
if(isset($_GET['action'])&&$_GET['action']=='login')
{
    $instanciacontrolador= new Usuario1Controller();
    $instanciacontrolador->index();
}
if(isset($_GET['action'])&&$_GET['action']=='Insert')
{
    $instanciacontrolador= new Usuario1Controller();
    $instanciacontrolador->Insert();
}
if(isset($_POST['action'])&&$_POST['action']=='insert')
{
    $instanciacontrolador= new Usuario1Controller();
    $password = password_hash($_POST['contraseña'],PASSWORD_BCRYPT);
    
}

?> 