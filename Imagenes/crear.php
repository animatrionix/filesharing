<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if (isset($_SESSION['id'])) {
    
} else {
    header("location: ../../vistas/");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <html lang="es">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link   rel="stylesheet"    href="../css/admin.css">
        <script src="../js/jquery-2.1.4.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <body>
            <div class="container"><!--   ../Controladores/accioncontroller.php ../-->
                <!--    <?php
                include_once '../modelos/menu.php';

                echo $menu;
                ?>    -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label><i class="fa fa-tachometer"></i> Subir Imágenes</label></div>
                    <div class="panel-body"><!--  Panel Content-->
                        <form role="form" action="../articulos/ver.php" enctype="multipart/form-data" method="post" id="registro" name="registro">

                           
                            <div class="form-group">
                                <label  for="image">Imagen:</label>
                                <input  type="file" name="image[]" id="image" class="" required multiple/>
                            </div>
                            <input  type="submit" value="Crear" class="btn btn-info" />
                            <a href="../Vistas/redirect.php"><button type="button" class="btn btn-success">
                                    <i class="fa fa-level-up"></i> Regresar</button></a>
                        </form>
                        <div class="aviso" id="aviso">
                            <script>
                                $("#registro")
                                        .submit(function (e) {
                                            $.ajax({
                                                url: 'image.php',
                                                type: 'POST',
                                                data: new FormData(this),
                                                processData: false,
                                                contentType: false,
                                                beforeSend: function () {
                                                    $("#aviso").html("<pre><code style='color: red'><i class='glyphicon glyphicon-remove'>¡Enviando!</i></code></pre>");
                                                }
                                                //                               ,success:   function(data){       
                                                //                             if (data) {// El usuario no existe
                                                //                                  $("#aviso").html("<pre><code style='color: red'><i class='glyphicon glyphicon-remove'>"+ data +"</i></code></pre>"); 
                                                //                                }else {// Datos Correctos
                                                //                                  $("#aviso").html("<pre><code style='color: green'><i class='glyphicon glyphicon-user'>¡Creado Correctamente!</i></code></pre>"); 
                                                ////                                this.submit();
                                                //                                  }}
                                            }).done(function (data) {
                                                if (data == "usuario") {// El usuario no existe
                                                    $("#aviso").html("<pre><code style='color: red'><i class='glyphicon glyphicon-remove'>" + data + "</i></code></pre>");
                                                } else {// Datos Correctos
                                                    $("#aviso").html("<pre><code style='color: green'><i class='glyphicon glyphicon-user'>¡Creado Correctamente!</i></code></pre>");
                                                    //                                this.submit();
                                                }
                                            });
                                            e.preventDefault();

                                        });
                               </script>

                        </div>   
                    </div></div>
                <?php
// put your code here
                ?>
        </body>
    </html>
