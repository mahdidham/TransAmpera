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
		
		$query="delete from jadwal_keberangkatan where Kode_Keberangkatan = '".$_GET['Kode_Keberangkatan']."'";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil)
				{
					echo "<script>
							alert('Hapus Jadwal Berhasil');
						window.location='index.php?page=jadwal';
				  </script>";
				}
				else
				{
					echo "<script>
					alert('Hapus Jadwal Gagal');
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