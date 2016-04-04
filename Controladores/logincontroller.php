<?php
//Controlador de la sesión del Usuario
session_start();
$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];

$controller = 1;
require_once '../controladores/usucontroller.php';

if (count($login) > 0) {
    if ($clave === $login['clave']) {

        $_SESSION['id'] = $login['id'];
        $_SESSION['usuario'] = $login['nombre'];
        $_SESSION['clave'] = $login['clave'];

        if (isset($_POST['recordar'])) {
            setcookie("id", $_SESSION['id'], time() + 7200, "/");
            setcookie("usuario", $_SESSION['usuario'], time() + 7200, "/");
            
        }
        $redirect = "../vistas/redirect.php";
        header("location: " . $redirect);
    } else {
        echo '<a href="../vistas/logout.php">Cerrar Sesión</a>';
        header("location:../vistas/logout.php");
    }
} else {
    echo '<a href="../vistas/logout.php">Cerrar Sesión</a>';
    header("location:../vistas/logout.php");
}

