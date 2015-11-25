<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;

		include('../configdb.php');
		
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