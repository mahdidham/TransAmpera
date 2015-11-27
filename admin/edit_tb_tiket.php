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
		
		$query="select * from tb_tiket where no_tiket = '".$_GET['no_tiket']."'";
		
		$hasil=mysql_query($query)or die('query error');

		if($hasil)
		{
					$data=mysql_fetch_array($hasil);
?>	
				<form action="prosesedit_tb_tiket.php" method="post">
		<table align="center" border="0">
		
		<tr>
			<td>No_Tiket</td>
			<td>:</td>
			<td>
				<input type="text" name="no_tiket"
				value="<?php echo $data['no_tiket']; ?>">
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
				<input type="text" name="Nama"
				value="<?php echo $data['Nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>KTP</td>
			<td>:</td>
			<td>
				<input type="text" name="KTP"
				value="<?php echo $data['KTP']; ?>">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<input type="text" name="Alamat"
				value="<?php echo $data['Alamat']; ?>">
			</td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td>:</td>
			<td>
				<input type="text" name="telepon"
				value="<?php echo $data['telepon']; ?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td>
				<input type="date" name="tanggal"
				value="<?php echo $data['tanggal']; ?>">
			</td>
		</tr>
		<tr>
			<td>Kode Keberangkatan</td>
			<td>:</td>
			<td>
				<input type="text" name="kode_keberangkatan"
				value="<?php echo $data['kode_keberangkatan']; ?>">
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
						alert('Edit tb_tiket Gagal');
							window.history.back();
					  </script>";
		}		
?>