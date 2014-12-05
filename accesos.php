<?php
$idu=$_GET['idu'];

SetCookie('idu',$idu);
SetCookie('acceso',1);

session_start();
$_SESSION['idu']=$idu;
$_SESSION['acceso']=1;
include ('conectabase.php');
$sql="select * from usuario where id='$idu'";
$consulta=mysql_query($sql)or die ("error de consulta");

		print "<meta http-equiv='refresh' content='0; url=sistema/index.php'>";
		exit;

	
?>