<?php
/**
 * Created by PhpStorm.
 * User: TraAavIezzO LokO
 * Date: 1/10/14
 * Time: 07:12 PM
 */

require('materia.php');
require_once('header.php');
require_once('bd.php');

if(isset($_REQUEST['accion'])){
    $accion = $_REQUEST['accion'];
    $materia = $_REQUEST['materia'];
    $maestro = $_REQUEST['maestro'];

    if($materia != 0){
        $sql = "INSERT INTO maestro_materia (id_maestro, id_materia) VALUES ($maestro, $materia)";
        $consulta = mysql_query($sql)or die("Error de inserción");
    }

}

$materia=new Materia();

$materia->seleccionaMaestro();

require('footer.php');

?>