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
		
		$query="delete from tb_login where Username = '".$_GET['Username']."'";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil)
				{
					echo "<script>
							alert('Hapus User Berhasil');
						window.location='index.php?page=listUser';
				  </script>";
				}
				else
				{
					echo "<script>
					alert('Hapus User Gagal');
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