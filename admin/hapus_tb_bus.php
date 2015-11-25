<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;

		include('../configdb.php');
		
		$query="delete from tb_bus where ID_bus = '".$_GET['ID_bus']."'";
		
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