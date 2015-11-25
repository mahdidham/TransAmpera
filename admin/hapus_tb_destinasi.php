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
		
		$query="delete from tb_destinasi where ID_pesanan = '".$_GET['ID_pesanan']."'";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil)
				{
					echo "<script>
							alert('Hapus tb_destinasi berhasil');
						window.location='index.php?page=tb_destinasi';
				  </script>";
				}
				else
				{
					echo "<script>
					alert('Hapus tb_destinasi berhasil Gagal');
						window.history.back();
				  </script>";
				}
	}
	else
	{
		echo "<script>
					alert('Anda Belum Login');
						window.history.back();
				  </script>";
	}
		
		
?>