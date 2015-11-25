<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;

		include('../configdb.php');
		
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