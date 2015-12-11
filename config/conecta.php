<?php
	
	require_once("banco.php");
	$conecta = mysql_connect("$host", "$usuario", "$senha") or print (mysql_error()); 
	mysql_select_db("$banco", $conecta) or print(mysql_error()); 

?>