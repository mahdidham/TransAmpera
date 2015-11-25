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
		
		$query="select * from tb_bus where ID_bus = '".$_GET['ID_bus']."'";
		
		$hasil=mysql_query($query)or die('query error');

		if($hasil)
		{
					$data=mysql_fetch_array($hasil);
?>	
				<form action="prosesedit_tb_bus.php" method="post">
		<table align="center" border="0">
		
		<tr>
			<td>ID_bus</td>
			<td>:</td>
			<td>
				<input type="text" name="ID_Bus"
				value="<?php echo $data['ID_bus']; ?>">
			</td>
		</tr>
		<tr>
			<td>Kelas_Bus</td>
			<td>:</td>
			<td>
				<input type="text" name="Kelas_Bus"
				value="<?php echo $data['Kelas_bus']; ?>">
			</td>
		</tr>
		<tr>
			<td>Asal_Bus</td>
			<td>:</td>
			<td>
				<input type="text" name="Asal_Bus"
				value="<?php echo $data['asal_bus']; ?>">
			</td>
		</tr>
		<tr>
			<td>Tujuan_Bus</td>
			<td>:</td>
			<td>
				<input type="text" name="Tujuan_Bus"
				value="<?php echo $data['tujuan_bus']; ?>">
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
						alert('Edit tb_bus Gagal');
							window.history.back();
					  </script>";
		}		
?>