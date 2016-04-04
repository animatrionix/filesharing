<?php

session_start();
session_destroy();
setcookie("id", $_SESSION['id'], time() - 7200, "/");
setcookie("usuario", $_SESSION['usuario'], time() - 7200, "/");
header("location: ../vistas/");
