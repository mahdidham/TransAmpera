<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;
        /*
		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		*/
        include('../configdb.php');
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query = "update tb_login set Nama='".$_POST['nama']."',Password='".$_POST['password']."',Status='".$_POST['status']."',Email='".$_POST['email']."' where Username='".$_POST['username']."' ";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil){
				echo "<script> alert('Data Berhasil Diperbarui'); window.location = 'index.php?page=listuser'; </script>";
			}
			
			else 
			{
				echo "<script> alert('Edit Gagal'); window.history.back(); </script>";
			}
	}
?>