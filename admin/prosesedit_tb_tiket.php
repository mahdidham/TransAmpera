<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;

		include('../configdb.php');
		
		$query = "update tb_tiket set no_tiket='".$_POST['no_tiket']."',
		ID_pesanan='".$_POST['ID_pesanan']."',Nama='".$_POST['Nama']."',
		KTP='".$_POST['KTP']."',Alamat='".$_POST['Alamat']."',telepon='".$_POST['telepon']."'
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