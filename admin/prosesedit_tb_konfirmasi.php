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
		
		$query = "update tb_konfirmasi set no_konfirmasi='".$_POST['no_konfirmasi']."',no_tiket='".$_POST['no_tiket']."',nama='".$_POST['nama']."',tanggal_transfer='".$_POST['tanggal_transfer']."',jam_transfer='".$_POST['jam_transfer']."',bank_tujuan='".$_POST['bank_tujuan']."',nominal='".$_POST['nominal']."',Keterangan='".$_POST['Keterangan']."' where no_konfirmasi='".$_POST['no_konfirmasi']."' ";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil){
				echo "<script> alert('Data Berhasil Diperbarui'); window.location = 'index.php?page=tb_konfirmasi'; </script>";
			}
			
			else 
			{
				echo "<script> alert('Edit Gagal'); window.history.back(); </script>";
			}
	}
?>