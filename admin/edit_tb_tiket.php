<?php
	
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;

		include('../configdb.php');
		
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
			<td>ID_Pesanan</td>
			<td>:</td>
			<td>
				<input type="text" name="ID_pesanan"
				value="<?php echo $data['ID_pesanan']; ?>">
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