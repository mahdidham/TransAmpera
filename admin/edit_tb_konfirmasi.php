<?php
	
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;
        /*
		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		*/
        include('../configdb.php');
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query="select * from tb_konfirmasi where no_konfirmasi = '".$_GET['no_konfirmasi']."'";
		
		$hasil=mysql_query($query)or die('query error');

		if($hasil)
		{
					$data=mysql_fetch_array($hasil);
?>	
				<form action="prosesedit_tb_konfirmasi.php" method="post">
		<table align="center" border="0">
		
		<tr>
			<td>No Konfirmasi</td>
			<td>:</td>
			<td>
				<input type="text" name="no_konfirmasi"
				value="<?php echo $data['no_konfirmasi']; ?>">
			</td>
		</tr>
		<tr>
			<td>No Tiket</td>
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
				<input type="text" name="nama"
				value="<?php echo $data['nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal Transfer</td>
			<td>:</td>
			<td>
				<input type="date" name="tanggal_transfer"
				value="<?php echo $data['tanggal_transfer']; ?>">
			</td>
		</tr>
		<tr>
			<td>Jam Transfer</td>
			<td>:</td>
			<td>
				<input type="time" name="jam_transfer"
				value="<?php echo $data['jam_transfer']; ?>">
			</td>
		</tr>
		<tr>
			<td>Bank Tujuan</td>
			<td>:</td>
			<td>
				<input type="text" name="bank_tujuan"
				value="<?php echo $data['bank_tujuan']; ?>">
			</td>
		</tr>
		<tr>
			<td>Nominal</td>
			<td>:</td>
			<td>
				<input type="text" name="nominal"
				value="<?php echo $data['nominal']; ?>">
			</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td>
				<select name="Keterangan">
					<option value="Belum Di Konfirmasi">Belum Di Konfirmasi</option>
					<option value="Sudah Di Konfirmasi">Sudah Di Konfirmasi</option>
					
				</select>
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
						alert('Edit tb_konfirmasi Gagal');
							window.history.back();
					  </script>";
		}		
?>