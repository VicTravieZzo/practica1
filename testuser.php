<?php
require_once('usuario.php');
require_once('header.php');
$new=new usuario();


if(isset($_POST['submit'])){
    switch ($_POST['submit']){


        case "alta";
            $name=$_POST['name'];
            $apep=$_POST['apep'];
            $apem=$_POST['apem'];
            $nivel=$_POST['nivel'];
            $new->create($name,$apep,$apem,$nivel);

            break;
        case "Borrar";

            $id=$_POST['ide'];
            $new->delete($id);
            break;


        case "Modificar";
            $name=$_POST['name'];
            $apep=$_POST['apep'];
            $apem=$_POST['apem'];
            $nivel=$_POST['nivel'];
            $new->update($_POST['modifica'],$name,$apep,$apem,$nivel);

            break;
        case "Consultar";

            $sql=$_POST['sql'];

            $new->readuS($sql);

            break;
    }


}


echo "<div class='panel-bod'>
 <div class='col-sm-4'>
        <div class='panel panel-success'>
            <div class='panel-heading'>
                <h3 class='panel-title'>Inserta los Datos del Usuario</h3>
            </div>
            <div class='panel-body'>
      <form name='usuario' action='testuser.php' method='post'>
        <table>
		   <tr><td>inserta id</td><td><input type='text' name='id'></td>
            <tr><td>Nombre(s)</td><td><input type='text' name='name'></td>
            <tr><td>Apellido paterno</td><td><input type='text' name='apep'></td>
            <tr><td>Apellido materno</td><td><input type='text' name='apem'></td>
            <tr><td>nivel</td><td><select  name='nivel'>
                        <option value='1'>Administrador</option>
                        <option value='2'>Alumno</option>
                        <option value='3'>Maestro</option>
                    </select></td>
            </table>
            <br><input type='submit' class='btn btn-sm btn-success' name='submit' value='alta'>
        <br><input type='text' name='ide'><input type='submit' class='btn btn-sm btn-danger' name='submit' value='Borrar'>
        <br><input type='text' name='modifica'><input type='submit' class='btn btn-sm btn-warning' name='submit' value='Modificar'>
        <br><input type='text' name='sql'><input type='submit' class='btn btn-sm btn-info'  name='submit' value='Consultar'>

        </form>




    </div>
    </div><!-- /.col-sm-4 -->
";

$new->readuG();
?>

