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
		
		$query="delete from tb_bus where no_bus = '".$_GET['no_bus']."'";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil)
				{
					echo "<script>
							alert('Hapus tb_bus berhasil');
						window.location='index.php?page=tb_bus';
				  </script>";
				}
				else
				{
					echo "<script>
					alert('Hapus tb_bus berhasil Gagal');
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