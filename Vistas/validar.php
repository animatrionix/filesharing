<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];

$controller = 1;
require_once '../controladores/usucontroller.php';

if ($login !== FALSE && !empty($login['nombre'])) {
    if ($clave === $login['clave']) {
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}
