<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include '../controladores/verificarlogin.php';
if (verificarlogin()) {
    header("location: ../vistas/redirect.php");
}
?>
<html lang="es">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link   rel="stylesheet"    href="../css/login.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label><i class="fa fa-tachometer"></i> Iniciar Sesión</label></div>
                <div class="panel-body"><!--  Panel Content-->
                    <form role="form" action="../controladores/logincontroller.php" method="post" id="login" name="login">

                        <div class="form-group">
                            <label  for="usuario"><i class="fa fa-user"></i> Usuario:</label>
                            <input  type="text" name="usuario" id="usuario" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label  for="clave"><i class="fa fa-key"></i> Clave:</label>
                            <input  type="password" name="clave" id="clave" class="form-control" required/>
                            <div    class="checkbox">
                                <label>
                                    <input  type="checkbox" value="r" name="recordar" id="recordar" />Recordar
                                </label>  
                            </div>
                        </div>
                        <input  type="submit" value="Ingresar" class="btn btn-primary" />
                    </form>
                    <div class="aviso" id="aviso">
                        <script>
                            $(function () {
                                $("#login").submit(function () {
                                    var datos = $("#login :input").serialize();
                                    var curl = "../vistas/validar.php";
                                    $.ajax({
                                        url: curl,
                                        data: datos,
                                        method: "post",
                                        cache: false,
                                        context: this,
                                        success: function (data) {
                                            if (data) {
                                                $("#aviso").html("<pre><code style='color: green'><i class='glyphicon glyphicon-user'>¡Logeado!</i></code></pre>");
                                                this.submit();
                                            } else {
                                                $("#aviso").html("<pre><code style='color: red'><i class='glyphicon glyphicon-remove'>¡El usuario o clave no son validos!</i></code></pre>");
                                            }
                                        }
                                    });
                                    return false;
                                });
                            });</script>

                    </div>   </div></div>
        </div>
    </body>


</html>