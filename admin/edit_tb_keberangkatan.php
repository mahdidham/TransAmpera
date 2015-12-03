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
		
		$query="select * from tb_keberangkatan where id_keberangkatan = '".$_GET['id_keberangkatan']."'";
		
		$hasil=mysql_query($query)or die('query error');

		if($hasil)
		{
					$data=mysql_fetch_array($hasil);
?>	
				<form action="prosesedit_tb_keberangkatan.php" method="post">
		<table align="center" border="0">
		
		<tr>
			<td>ID Keberangkatan</td>
			<td>:</td>
			<td>
				<input type="text" name="id_keberangkatan"
				value="<?php echo $data['id_keberangkatan']; ?>">
			</td>
		</tr>
		<tr>
			<td>ID Bus</td>
			<td>:</td>
			<td>
				<input type="text" name="id_bus"
				value="<?php echo $data['id_bus']; ?>">
			</td>
		</tr>
		<tr>
			<td>Kota Asal</td>
			<td>:</td>
			<td>
				<input type="text" name="kota_asal"
				value="<?php echo $data['kota_asal']; ?>">
			</td>
		</tr>
		<tr>
			<td>Kota Tujuan</td>
			<td>:</td>
			<td>
				<input type="text" name="kota_tujuan"
				value="<?php echo $data['kota_tujuan']; ?>">
			</td>
		</tr>
		<tr>
			<td>Jam Berangkat</td>
			<td>:</td>
			<td>
				<input type="time" name="jam_berangkat"
				value="<?php echo $data['jam_berangkat']; ?>">
			</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>
				<input type="text" name="harga"
				value="<?php echo $data['harga']; ?>">
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
						alert('Edit tb_keberangkatan Gagal');
							window.history.back();
					  </script>";
		}		
?>