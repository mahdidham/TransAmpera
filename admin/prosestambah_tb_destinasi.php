
		<?php
		session_start();
		$_session['login']=1;

		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query = "select * from tb_destinasi where ID_bus = '".$_POST['ID_bus']."'";
		$hasil = mysql_query($query) or die ('Query Error');
		$hitung = mysql_num_rows($hasil);
		if($hitung==0)
		{
			if($_POST['ID_pesanan']==$_POST['ID_pesanan'])
			{
				$query = "insert into tb_destinasi values ('".$_POST['ID_pesanan']."','".$_POST['Kota_asal']."','".$_POST['Kota_tujuan']."','".$_POST['Tanggal_berangkat']."','".$_POST['Tanggal_pulang']."','".$_POST['Penumpang_dewasa']."','".$_POST['Penumpang_bayi']."','".$_POST['ID_bus']."');";
				
				$hasil= mysql_query($query)or die('Querry Error');
				
				if($hasil)
				{
					echo "<script>
							alert('Penambahan  Berhasil');
						window.location='index.php?page=tb_destinasi';
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
		