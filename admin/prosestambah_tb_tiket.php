
		<?php
		session_start();
		$_session['login']=1;

		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query = "select * from tb_tiket where no_tiket = '".$_POST['no_tiket']."'";
		$hasil = mysql_query($query) or die ('Query Error');
		$hitung = mysql_num_rows($hasil);
		if($hitung==0)
		{
			if($_POST['no_tiket']==$_POST['no_tiket'])
			{
				$query = "insert into tb_tiket values ('".$_POST['no_tiket']."','".$_POST['Nama']."','".$_POST['KTP']."','".$_POST['Alamat']."','".$_POST['telepon']."','".$_POST['tanggal']."','".$_POST['kode_keberangkatan']."');";
				
				$hasil= mysql_query($query)or die('Querry Error');
				
				if($hasil)
				{
					echo "<script>
							alert('Penambahan  Berhasil');
						window.location='index.php?page=tb_tiket';
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
		