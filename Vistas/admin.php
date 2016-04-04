<!DOCTYPE html>
<?php
if (isset($_SESSION['id'])) {
    
} else {
    header("location: ../vistas/");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link   rel="stylesheet"    href="../css/admin.css">
        <script src="../js/jquery-2.1.4.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
 <?php
            include_once '../modelos/menu.php';

            echo $menu;
            ?>
            Bienvenido <b> <?php echo ucwords($_SESSION['usuario']); ?></b>
            <br>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-tachometer"></i> Panel de Imágenes</div>
                <div class="panel-body"><!--  Panel Content-->
                    <div class="col-xs-2">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills nav-stacked" role="tablist">
                            Imágenes
                        </ul>
                    </div>
                    <div class="col-xs-10">
                        <!-- Tab panes -->
                        <div class="tab-content" style="margin-top: 3px;">
                           

                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </body>
</html>
