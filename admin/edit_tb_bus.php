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
        include("../configdb.php");
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query="select * from tb_bus where no_bus = '".$_GET['no_bus']."'";
		
		$hasil=mysql_query($query)or die('query error');

		if($hasil)
		{
					$data=mysql_fetch_array($hasil);
?>	
				<form action="prosesedit_tb_bus.php" method="post">
		<table align="center" border="0">
		
		<tr>
			<td>no_bus</td>
			<td>:</td>
			<td>
				<input type="text" name="no_bus"
				value="<?php echo $data['no_bus']; ?>">
			</td>
		</tr>
		<tr>
			<td>Kapasitas</td>
			<td>:</td>
			<td>
				<input type="text" name="kapasitas"
				value="<?php echo $data['kapasitas']; ?>">
			</td>
		</tr>
		<tr>
			<td>No Plat</td>
			<td>:</td>
			<td>
				<input type="text" name="plat"
				value="<?php echo $data['plat']; ?>">
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