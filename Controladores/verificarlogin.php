<?php

/* 
 * Controlador para Verificar el Logueo del Usuario
 * 
 * 
 */

session_start();

function verificarlogin() {
    if (isset($_SESSION['id']) || isset($_COOKIE['id'])) {
        $login = TRUE;
        return $login;
    }
}




