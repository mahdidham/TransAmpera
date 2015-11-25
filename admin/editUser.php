<?php
	
	if(isset($_SESSION['login']))
	{
		$_SESSION['login']=1;

		include('../configdb.php');
		
		$query="select * from tb_login where Username = '".$_GET['Username']."'";
		
		$hasil=mysql_query($query)or die('query error');

		if($hasil)
		{
					$data=mysql_fetch_array($hasil);
?>	
				<form action="prosesedituser.php" method="post">
		<table align="center" border="0">
		
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
				<input type="text" name="nama"
				value="<?php echo $data['Nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>
				<input type="text" name="username"
				value="<?php echo $data['Username']; ?>">
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>
				<input type="password" name="password"
				value="<?php echo $data['Password']; ?>">
			</td>
		</tr>
		<tr>
			<td>Konfirmasi Password</td>
			<td>:</td>
			<td>
				<input type="password" name="passwordconfirm"
				value="<?php echo $data['Password']; ?>">
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<input type="text" name="status"
				value="<?php echo $data['Status']; ?>">
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				<input type="text" name="email"
				value="<?php echo $data['Email']; ?>">
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
						alert('Edit User Gagal');
							window.history.back();
					  </script>";
		}		
?>