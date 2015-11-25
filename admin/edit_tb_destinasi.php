<?php
	
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;

		include('../configdb.php');
		
		$query="select * from tb_destinasi where ID_pesanan = '".$_GET['ID_pesanan']."'";
		
		$hasil=mysql_query($query)or die('query error');

		if($hasil)
		{
					$data=mysql_fetch_array($hasil);
?>	
				<form action="prosesedit_tb_destinasi.php" method="post">
		<table align="center" border="0">
		
		<tr>
			<td>ID_Pesanan</td>
			<td>:</td>
			<td>
				<input type="text" name="ID_pesanan"
				value="<?php echo $data['ID_pesanan']; ?>">
			</td>
		</tr>
		<tr>
			<td>Kota_Asal</td>
			<td>:</td>
			<td>
				<input type="text" name="Kota_asal"
				value="<?php echo $data['Kota_asal']; ?>">
			</td>
		</tr>
		<tr>
			<td>Kota_Tujuan</td>
			<td>:</td>
			<td>
				<input type="text" name="Kota_tujuan"
				value="<?php echo $data['Kota_tujuan']; ?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal_Berangkat</td>
			<td>:</td>
			<td>
				<input type="date" name="Tanggal_berangkat"
				value="<?php echo $data['Tanggal_berangkat']; ?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal_Pulang</td>
			<td>:</td>
			<td>
				<input type="date" name="Tanggal_pulang"
				value="<?php echo $data['Tanggal_pulang']; ?>">
			</td>
		</tr>
		<tr>
			<td>Penumpang_Dewasa</td>
			<td>:</td>
			<td>
				<input type="text" name="Penumpang_dewasa"
				value="<?php echo $data['Penumpang_dewasa']; ?>">
			</td>
		</tr>
		<tr>
			<td>Penumpang_Bayi</td>
			<td>:</td>
			<td>
				<input type="text" name="Penumpang_bayi"
				value="<?php echo $data['Penumpang_bayi']; ?>">
			</td>
		</tr>
		<tr>
			<td>ID_Bus</td>
			<td>:</td>
			<td>
				<input type="text" name="ID_bus"
				value="<?php echo $data['ID_bus']; ?>">
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
						alert('Edit tb_destinasi Gagal');
							window.history.back();
					  </script>";
		}		
?>