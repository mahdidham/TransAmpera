
		<?php
		session_start();
		$_session['login']=1;

		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query = "select * from jadwal_keberangkatan where Kode_Keberangkatan = '".$_POST['Kode_Keberangkatan']."'";
		$hasil = mysql_query($query) or die ('Query Error');
		$hitung = mysql_num_rows($hasil);
		if($hitung==0)
		{
			if($_POST['Asal']==$_POST['Asal'])
			{
				$query = "insert into jadwal_keberangkatan values ('".$_POST['Kode_Keberangkatan']."','".$_POST['Hari']."','".$_POST['Jam']."','".$_POST['Asal']."','".$_POST['Tujuan']."');";
				
				$hasil= mysql_query($query)or die('Querry Error');
				
				if($hasil)
				{
					echo "<script>
							alert('Penambahan  Berhasil');
						window.location='index.php?page=jadwal';
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
						alert('password Anda Tidak Sesuai');
						window.history.back();
				  </script>";
			}
		}
		else
		{
			echo "<script>
						alert('Kode_Keberangkatan Telah Digunakan');
						window.history.back();
				  </script>";
		}
			
		?>
		