
		<?php
		session_start();
		$_session['login']=1;

		include('../configdb.php');
		
		$query = "select * from tb_tiket where no_tiket = '".$_POST['no_tiket']."'";
		$hasil = mysql_query($query) or die ('Query Error');
		$hitung = mysql_num_rows($hasil);
		if($hitung==0)
		{
			if($_POST['no_tiket']==$_POST['no_tiket'])
			{
				$query = "insert into tb_tiket values ('".$_POST['no_tiket']."','".$_POST['ID_pesanan']."','".$_POST['Nama']."','".$_POST['KTP']."','".$_POST['Alamat']."','".$_POST['telepon']."');";
				
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
		