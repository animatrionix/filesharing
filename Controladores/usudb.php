<?php

require_once '../modelos/db.php';

/**
 * Controlador de la Tabla usuarios
 *
 * @author oscardavid
 */
class usuario {
    
    public function loginuser($nombre) {
        try {
            $sql = db::conectar();
            $query = "SELECT * FROM usuarios  WHERE nombre = '" . $nombre . "'";
            $rq = mysql_query($query);
            $result = mysql_fetch_array($rq);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }}