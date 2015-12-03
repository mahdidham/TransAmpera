<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;

		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query = "update tb_jadwal set tanggal='".$_POST['tanggal']."',id_keberangkatan='".$_POST['id_keberangkatan']."' where id_keberangkatan='".$_POST['id_keberangkatan']."' ";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil){
				echo "<script> alert('Data Berhasil Diperbarui'); window.location = 'index.php?page=tb_jadwal'; </script>";
			}
			
			else 
			{
				echo "<script> alert('Edit Gagal'); window.history.back(); </script>";
			}
	}
?>