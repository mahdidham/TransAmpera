<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;

		include('../configdb.php');
		
		$query = "update tb_bus set ID_bus='".$_POST['ID_Bus']."',Kelas_bus='".$_POST['Kelas_Bus']."',asal_bus='".$_POST['Asal_Bus']."',tujuan_bus='".$_POST['Tujuan_Bus']."' where ID_bus='".$_POST['ID_Bus']."' ";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil){
				echo "<script> alert('Data Berhasil Diperbarui'); window.location = 'index.php?page=tb_bus'; </script>";
			}
			
			else 
			{
				echo "<script> alert('Edit Gagal'); window.history.back(); </script>";
			}
	}
?>