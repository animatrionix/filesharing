<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../controladores/usudb.php';
try {
    $usu = new usuario();

    if ($controller === 1) {
        $login = $usu->loginuser($usuario);
    }
} catch (Exception $ex) {
    throw $ex;
}