<?php
		if(isset($_SESSION['login']))
		{

		include('../configdb.php');
		
		
		?>
		
	<table border="1" align="center">
		<tr>
		<td colspan="5" align="left">
		<a href="index.php?page=tambah_tb_bus">+Tambah</a>
		</td>
		</tr>
		<tr>
			<td>ID_bus</td>
			<td>Kelas_bus</td>
			<td>Asal_bus</td>
			<td>Tujuan_bus</td>
			<td>Action</td>
		</tr>
	
	<?php
		$query =  "select * from tb_bus";
		$hasil = mysql_query($query)or die ('Query Error');
		
		
		
		$hasil=mysql_query($query)or die(mysql_error());
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td>".$data['ID_bus']."
			</td>
			<td>".$data['Kelas_bus']."
			</td>
			<td>".$data['asal_bus']."
			</td>
			<td>".$data['tujuan_bus']."
			</td>
			<td><a href='index.php?page=edit_tb_bus&ID_bus=".$data['ID_bus']."'>edit</a>
			/ 
			<a href='hapus_tb_bus.php?ID_bus=".$data['ID_bus']."'>hapus</a>
			</td>
		</tr>";
		}
		
		
	?>
	</table>
	<?php
		}
	?>