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
		
		$query="delete from tb_tiket where no_tiket = '".$_GET['no_tiket']."'";
		
		$hasil=mysql_query($query)or die('query error');
		if($hasil)
				{
					echo "<script>
							alert('Hapus tb_tiket berhasil');
						window.location='index.php?page=tb_tiket';
				  </script>";
				}
				else
				{
					echo "<script>
					alert('Hapus tb_tiket berhasil Gagal');
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