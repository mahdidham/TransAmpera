<?php
		if(isset($_SESSION['login']))
		{

		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		
		?>
	<table border="1" align="center">
		<tr>
			<td>Nama</td>
			<td>Username</td>
			<td>Password</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
	
	<?php
		$query =  "select * from login";
		$hasil = mysql_query($query)or die ('Query Error');
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td>".$data['Nama']."
			</td>
			<td>".$data['Username']."
			</td>
			<td>".$data['Password']."
			</td>
			<td>".$data['Email']."
			</td>
			<td><a href='index.php?page=editUser&Username=".$data['Username']."'>edit</a>
			/ 
			<a href='hapusUser.php?Username=".$data['Username']."'>hapus</a>
			</td>
		</tr>";
		}
	?>
	</table>
	<?php
		}
	?>