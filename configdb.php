<?php
	$user= "be403f13277093";//"root";
	$pass="704d78d8";
	$host= "br-cdbr-azure-south-a.cloudapp.net"; //"localhost";
	$database= "transampera"; //"transampera";
	
	$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
	$db=mysql_select_db($database) or die(mysql_error());
?>