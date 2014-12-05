<?php
require("clases/Login.php");
require 'templates/header.php';
$login = new Login();
$login->mostrarFormulario();

