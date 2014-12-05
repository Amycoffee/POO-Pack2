<?php
include("clases/security.php");
$claveUsuario = $_SESSION["clave"];
?>
<?php include("templates/header.php"); ?>
<?php
require("templates/menu.php");
require("clases/Evaluar.php");
require("bd/bd.php");
$evaluacion = new Evaluar();
$evaluacion->mostrarUsuario($claveUsuario);
$evaluacion->mostrarResultados($claveUsuario);
?>
<?php

require 'helpers.php';
if(empty($_GET['url']))
    $_GET['url']='home';

controller($_GET['url']);
