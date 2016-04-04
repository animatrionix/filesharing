<?php
//Estructura del menú
$menu = '<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="../vistas/admin.php"><i class="fa fa-cloud"></i> Administración</a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user"></i> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="../vistas/admin.php">      
                    <i class="fa fa-tachometer"></i> Panel</a></li>
                  <li><a href="../vistas/logout.php">      
                    <i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>';
