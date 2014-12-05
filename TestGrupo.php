<?php
error_reporting(0);
require('Usuario.php');
require('Grupo.php');
require('bd.php');
require('header.php');
    //Creamos un objeto
    $grupo = new Grupo();

	//Solo si recibe el elemento del formulario 'add_alu_grup'//
     if(isset($_REQUEST['add_alu_grup'])){
          //Recibimos la cantidad de alumnos.
         $cuantos=$_REQUEST['cuantos'];

         //Repetimos el proceso hasta $cuantos.
         for($y=0; $y <$cuantos; $y++){
             // Recibimos el checkbox de la posicion [$y].
             $al=$_REQUEST["al$y"];

             //Va a llamar el método asignarGrupos sólo si el checkbox está lleno.
          if($al != ""){

              $grupo->asignarGrupos($al,$_REQUEST['grupo']);
            }
         }
         echo"<div class=\"alert alert-success\" role=\"alert\"> Alumnos agregados correctamente </div>";
     }
     //Solo si recibe el id a eliminar 'desasignar'.

      if(isset($_REQUEST['id'])){
           //Mandamos a llamar al metodo de eliminarGrupos.
          $grupo->eliminarGrupos($_REQUEST['id']);
          echo"<div class=\"alert alert-warning\" role=\"alert\">Alumnos Desasignados exitosamente</div>";
      }

     //Creamos un formulario en el cual mostramos los alumnos y el combo dinamico de los grupos

    echo"<form action=TestGrupo.php method='Post'>";
    //Mostramos los lumnos ya sea asignados o desasignados de un grupo.
    $grupo->muestraAlumnos();
    //Mostramos el combo dinamico.
     $grupo->muestraGrupos();
    //Elemento del formulario 'add_alu_grup'.
    echo"<input type='hidden' name='add_alu_grup'>";
    echo"<input type='submit' value='Agregar' class=\"btn btn-default\">";
    echo"</form>";

    require('footer.php');

?>