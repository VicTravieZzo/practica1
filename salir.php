<?php
SetCookie('idu',"");
SetCookie('acceso',"");
session_start();
session_unset();
session_destroy();
header("location:index.php?msg=");
exit;
?>