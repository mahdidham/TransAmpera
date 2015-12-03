<?php
		if(isset($_SESSION['login']))
		{
        /*
		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		*/
        include('../configdb.php');
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		
		?>
		
	<table border="1" align="center">
		<tr>
		<td colspan="6" align="left">
		<a href="index.php?page=tambah_tb_bus">+Tambah</a>
		</td>
		</tr>
		<tr>
			<td>No Bus</td>
			<td>Kapasitas</td>
			<td>Plat</td>
			<td>Action</td>
		</tr>
	
	<?php
		$query =  "select * from tb_bus";
		$hasil = mysql_query($query)or die ('Query Error');
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td>".$data['no_bus']."
			</td>
			<td>".$data['kapasitas']."
			</td>
			<td>".$data['plat']."
			</td>
			<td><a href='index.php?page=edit_tb_bus&no_bus=".$data['no_bus']."'>edit</a>
			/ 
			<a href='hapus_tb_bus.php?no_bus=".$data['no_bus']."'>hapus</a>
			</td>
		</tr>";
		}
		
		
	?>
	</table>
	<?php
		}
	?>