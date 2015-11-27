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
		
		$query = "update tb_tiket set no_tiket='".$_POST['no_tiket']."',
		Nama='".$_POST['Nama']."',
		KTP='".$_POST['KTP']."',Alamat='".$_POST['Alamat']."',telepon='".$_POST['telepon']."',tanggal='".$_POST['tanggal']."',kode_keberangkatan='".$_POST['kode_keberangkatan']."'
		where no_tiket='".$_POST['no_tiket']."' ";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil){
				echo "<script> alert('Data Berhasil Diperbarui'); window.location = 'index.php?page=tb_tiket'; </script>";
			}
			
			else 
			{
				echo "<script> alert('Edit Gagal'); window.history.back(); </script>";
			}
	}
?>