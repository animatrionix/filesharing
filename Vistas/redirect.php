<?php

session_start();
if (isset($_COOKIE['id'])) {
    $_SESSION['id'] = $_COOKIE['id'];
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}
if (!empty($_SESSION['id'])) {
    
    include_once '../vistas/admin.php';
} else {
    echo '<a href="../vistas/logout.php">Cerrar Sesión</a>';
    header("location:../vistas/logout.php");
}
