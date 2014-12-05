<script src="jquery.min.js"></script>

<?php

require('bd.php');
require("materia.php");
require("header.php");

$maestro = $_POST['idmae'];

//Creamos un objeto
$materia = new Materia();

$materia->datosMaestro($maestro);

$materia->materiasAsignadas($maestro);

$materia->asignarMateriaMaestro($maestro);



require('footer.php');

?>