
		<?php
		session_start();
		$_session['login']=1;

		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query = "select * from tb_bus where ID_bus = '".$_POST['ID_bus']."'";
		$hasil = mysql_query($query) or die ('Query Error');
		$hitung = mysql_num_rows($hasil);
		if($hitung==0)
		{
			if($_POST['asal_bus']==$_POST['asal_bus'])
			{
				$query = "insert into tb_bus values ('".$_POST['ID_bus']."','".$_POST['Kelas_bus']."','".$_POST['asal_bus']."','".$_POST['tujuan_bus']."');";
				
				$hasil= mysql_query($query)or die('Querry Error');
				
				if($hasil)
				{
					echo "<script>
							alert('Penambahan  Berhasil');
						window.location='index.php?page=tb_bus';
				  </script>";
				}
				else
				{
					echo "<script>
					alert('Penambahan Gagal');
						window.history.back();
				  </script>";
				}
			}
			else
			{
				echo "<script>
					alert('Penambahan Gagal');
						window.history.back();
				  </script>";
			}
		}
		else
		{
			echo "<script>
					alert('Penambahan Gagal');
						window.history.back();
				  </script>";
		}
			
		?>
		