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
		
		$query = "update jadwal_keberangkatan set Hari='".$_POST['Hari']."',Jam='".$_POST['Jam']."',Asal='".$_POST['Asal']."',Tujuan='".$_POST['Tujuan']."' where Kode_Keberangkatan='".$_POST['Kode_Keberangkatan']."' ";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil){
				echo "<script> alert('Data Berhasil Diperbarui'); window.location = 'index.php?page=jadwal'; </script>";
			}
			
			else 
			{
				echo "<script> alert('Edit Gagal'); window.history.back(); </script>";
			}
	}
?>