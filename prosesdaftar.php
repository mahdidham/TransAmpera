
		<?php
		session_start();
		$_SESSION['login']=1;		

		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query = "select * from login where Username = '".$_POST['username']."'";
		$hasil = mysql_query($query) or die ('Query Error');
		$hitung = mysql_num_rows($hasil);
		if($hitung==0)
		{
			if($_POST['password']==$_POST['passwordconfirm'])
			{
				$query = "insert into login values ('".$_POST['nama']."','".$_POST['username']."','".$_POST['password']."','".$_POST['email']."');";
				
				$hasil= mysql_query($query)or die('Querry Error');
				
				if($hasil)
				{
					echo "<script>
							alert('Registrasi Berhasil');
						window.location='index.php';
				  </script>";
				}
				else
				{
					echo "<script>
					alert('Registrasi Gagal');
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
						alert('Username Telah Digunakan');
						window.history.back();
				  </script>";
		}
			
		?>
		