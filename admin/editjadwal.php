<?php
	
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;

		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query="select * from jadwal_keberangkatan where Kode_Keberangkatan = '".$_GET['Kode_Keberangkatan']."'";
		
		$hasil=mysql_query($query)or die('query error');

		if($hasil)
		{
					$data=mysql_fetch_array($hasil);
?>	
				<form action="proseseditjadwal.php" method="post">
		<table align="center" border="0">
		
		<tr>
			<td>Kode_Keberangkatan</td>
			<td>:</td>
			<td>
				<input type="text" name="Kode_Keberangkatan"
				value="<?php echo $data['Kode_Keberangkatan']; ?>">
			</td>
		</tr>
		<tr>
			<td>Hari</td>
			<td>:</td>
			<td>
				<input type="text" name="Hari"
				value="<?php echo $data['Hari']; ?>">
			</td>
		</tr>
		<tr>
			<td>Jam</td>
			<td>:</td>
			<td>
				<input type="time" name="Jam"
				value="<?php echo $data['Jam']; ?>">
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td>
				<input type="text" name="Asal"
				value="<?php echo $data['Asal']; ?>">
			</td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td>:</td>
			<td>
				<input type="text" name="Tujuan"
				value="<?php echo $data['Tujuan']; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="3" align="center">
				<input type="submit" value="Simpan"></input>
				<input type="reset" value="Reset"></input>
			</td>
		</tr>
		
	</table>
	</form>
<?php
		}
	}
		else
		{
			echo "<script>
						alert('Edit Jadwal Gagal');
							window.history.back();
					  </script>";
		}		
?>