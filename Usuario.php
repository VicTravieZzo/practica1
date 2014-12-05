<?php

include_once('conexion.php');
class usuario {

    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;
    private $telefono;
    private $calle;
    private $numero_externo;
    private $numero_interior;
    private $colonia;
    private $municipio;
    private $estado;
    private $CP;
    private $correo;
    private $usuario;
    private $contrasena;
    private $nivel;
    private $status;

    public function create($nombre,$apellido_paterno,$apellido_materno,$nivel){

        $insert=mysql_query("insert into usuario (nombre,apellido_paterno,apellido_materno,nivel,status)
                                 values ('$nombre','$apellido_paterno','$apellido_materno','$nivel',1)");
    }

    public function readuG(){

        echo"<div class='table-responsive'>";
        echo" <table class=\"table table-striped\" >";
        echo"<tr><td>id_usuario</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Tipo</td></tr>";
        $sql=mysql_query("select * from usuario  order by id_usuario desc ") or die (mysql_error());
        while($field= mysql_fetch_array($sql)){
            $this->id=$field['id_usuario'];
            $this->Nombre=$field['Nombre'];
            $this->apellido_paterno=$field['apellido_paterno'];
            $this->apellido_materno=$field['apellido_materno'];
            $this->Nivel=$field['Nivel'];
            switch($this->Nivel){
                case 1;
                    $type="Administrador";
                    break;
                case 2;
                    $type="alumno";
                    break;
                case 3;
                    $type="maestro";
                    break;
            }
            echo"<tr><td>$this->id</td><td>$this->Nombre</td><td>$this->apellido_paterno</td><td>$this->apellido_materno</td><td>$type</td></tr>";

        }
        echo"</table></div>";


    }

    public function readuS($id){

        //$idu=mysql_result(mysql_query(" select * from usuario where id_usuario=$id"),0,'id_usuario');


      $sql=mysql_query("select * from usuario where id_usuario='$id' ") or die (mysql_error());
        echo"<div class='table-responsive'>";
        echo" <table class=\"table table-striped\" >";
        echo"<tr><td>idusuario</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Tipo</td></tr>";
        while($field= mysql_fetch_array($sql)){
            $this->id=$field['id_usuario'];
            $this->Nombre=$field['Nombre'];
            $this->apellido_paterno=$field['apellido_paterno'];
            $this->apellido_materno=$field['apellido_materno'];
            $this->Nivel=$field['Nivel'];

            switch($this->Nivel){
               case 1;
                    $type="Administrador";

                    break;
                case 2;
                    $type="alumno";
                    break;
                case 3;
                    $type="maestro";
                    break;
            }

        }

        echo"<tr><td>$this->id</td><td>$this->Nombre</td><td>$this->apellido_paterno</td><td>$this->apellido_materno</td><td>$type</td></tr>";
        echo"</table></div>";

    }

    public function delete($ide){

        $delete=mysql_query("delete from usuario where id_usuario=$ide");



    }


    public function update($id,$name,$a_pat,$a_mat,$nivel){

        $update=mysql_query("update usuario set nombre='$name',apellido_paterno='$a_pat',apellido_materno='$a_mat',nivel='$nivel' where id_usuario=$id");

    }


}
?>
