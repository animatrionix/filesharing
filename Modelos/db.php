<?php

/**
 * Description of db
 *
 * @author oscardavid
 */
class db {

    //Función para Conectar a la Base de Datos  
    public function conectar() {

        $user = "root";         //Usuario
        $pass = "";             //Contraseña
        $db = "filesharing";    //Base de Datos
        $hostdb = "localhost";  //Host de la BD
        
        //Proceso de Conección
        $conex = mysql_connect($hostdb, $user, $pass) or die("Error al Conectar la Base de Datos");
        
        mysql_select_db($db, $conex) or die("Error al obtener datos");
        
        mysql_set_charset('utf8', $conex);
        
    }

}
