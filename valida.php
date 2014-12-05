<?php
$user=$_REQUEST['usuario'];
$psw=$_REQUEST['pass'];

include('conectabase.php');

if ($user=="" or $psw=="")
{
	$msg="los campos deben ir llenos";
	print "<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
	exit;
}
if ($user=="' or 1=1 -- ")
{
	$msg="no trates de hackear este sistema";
	print "<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
	exit;
}

$sql="select * from usuario where usuario='$user'";
$query=mysql_query($sql) or die ("error1");
$cuantos=mysql_num_rows($query);
if ($cuantos==0)
{
	$msg="El usuario no existe";
	print "<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
	exit;
}
$contraseña=mysql_result($query,0,'pws');
if ($contraseña!=$psw)
{
	$msg="La contraseña no coincide";
	print "<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
	exit;
}
else
{
	$idu=mysql_result($query,0,'id');
	print "<meta http-equiv='refresh' content='0; url=accesos.php?idu=$idu'>";
}
?>