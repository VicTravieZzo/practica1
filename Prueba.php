<?php

require("Alumno.php");
require("bd.php");
$usuario = new Alumno();

$usuario->createUsuario();
$usuario->deleteUsuario();
$usuario->showUsuario();
$usuario->readUsuario();
$usuario->updateUsuario();



?>