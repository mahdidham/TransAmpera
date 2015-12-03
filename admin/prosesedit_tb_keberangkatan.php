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
		
		$query = "update tb_keberangkatan set id_keberangkatan='".$_POST['id_keberangkatan']."',id_bus='".$_POST['id_bus']."',kota_asal='".$_POST['kota_asal']."',kota_tujuan='".$_POST['kota_tujuan']."',
		jam_berangkat='".$_POST['jam_berangkat']."',harga='".$_POST['harga']."'
		where id_keberangkatan='".$_POST['id_keberangkatan']."' ";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil){
				echo "<script> alert('Data Berhasil Diperbarui'); window.location = 'index.php?page=tb_keberangkatan'; </script>";
			}
			
			else 
			{
				echo "<script> alert('Edit Gagal'); window.history.back(); </script>";
			}
	}
?>