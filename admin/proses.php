
	<?php
	session_start();
	
	$user="root";
	$pass="";
	$host="localhost";
	$database="transampera";
	
	$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
	$db=mysql_select_db($database) or die(mysql_error());
	
	$query="select * from tb_login where Username='".$_POST['username']."' and Password='".$_POST['password']."'";
	$hasil=mysql_query($query)or die('query error');
	
	$hitung=mysql_num_rows($hasil);
	if ($hitung>0){
		echo "<script>alert('Login Berhasil'); 
				window.location = 'index.php?page=administrator';
				
		</script>";
		$data = mysql_fetch_array($hasil);
		$_SESSION['login']=1;
	}
	else{
		echo "<script>alert('Login Gagal'); 
				window.history.back();
		</script>";			
	}
	
	?>
