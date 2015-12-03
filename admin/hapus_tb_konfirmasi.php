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
		
		$query="delete from tb_konfirmasi where no_konfirmasi = '".$_GET['no_konfirmasi']."'";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil)
				{
					echo "<script>
							alert('Hapus tb_konfirmasi berhasil');
						window.location='index.php?page=tb_konfirmasi';
				  </script>";
				}
				else
				{
					echo "<script>
					alert('Hapus tb_konfirmasi berhasil Gagal');
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