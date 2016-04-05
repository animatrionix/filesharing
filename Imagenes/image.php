<?php

/**
 * Description of image
 *
 * @author oscardavid
 */
class image {

    public function Upload() {
        $dir = "folder/";
        $num = count($_FILES['image']['name']);
        for ($n = 0; $n < $num; $n++) {

            $dir_file = $dir . basename($_FILES['image']['name'][$n]);
            $upload = 1;
            $filetype = pathinfo($dir_file, PATHINFO_EXTENSION);
            $check = getimagesize($_FILES['image']['tmp_name'][$n]);
            if ($check !== false) {
                $upload = 1;
            } else {
                echo 'El archivo no es una imagen.';
                $upload = 0;
            }
            if (file_exists($dir_file)) {
                echo 'El archivo ya existe.';
                $udata['image'][$n] = $dir_file;
                $upload = 0;
            }
            if ($upload == 0) {
                echo 'El archivo no se pudo subir.';
            } else {
                if (move_uploaded_file($_FILES['image']['tmp_name'][$n], $dir_file)) {
                    echo 'El archivo' . basename($_FILES['image']['name'][$n]) . ' ha sido cargado.';
                    $udata['image'][$n] = $dir_file;
                } else {
                    echo 'Se ha presentado un error al subir el archivo.';
                }
            }
        }
        
    }

}

$images = new image();
$res = $images->Upload();
