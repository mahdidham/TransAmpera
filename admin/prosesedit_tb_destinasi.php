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
		
		$query = "update tb_destinasi set ID_bus='".$_POST['ID_pesanan']."',Kota_asal='".$_POST['Kota_asal']."',Kota_tujuan='".$_POST['Kota_tujuan']."',
		Tanggal_berangkat='".$_POST['Tanggal_berangkat']."',Tanggal_pulang='".$_POST['Tanggal_pulang']."',
		Penumpang_dewasa='".$_POST['Penumpang_dewasa']."',Penumpang_bayi='".$_POST['Penumpang_bayi']."',ID_bus='".$_POST['ID_bus']."'
		where ID_pesanan='".$_POST['ID_pesanan']."' ";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil){
				echo "<script> alert('Data Berhasil Diperbarui'); window.location = 'index.php?page=tb_destinasi'; </script>";
			}
			
			else 
			{
				echo "<script> alert('Edit Gagal'); window.history.back(); </script>";
			}
	}
?>