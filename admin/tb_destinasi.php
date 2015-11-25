<?php
		if(isset($_SESSION['login']))
		{

		include('../configdb.php');
		
		
		?>
	<table border="1" align="center">
		<tr>
		<td colspan="9" align="left">
		<a href="index.php?page=tambah_tb_destinasi">+Tambah</a>
		</td>
		</tr>
		<tr>
			<td>ID_pesanan</td>
			<td>Kota_asal</td>
			<td>Kota_tujuan</td>
			<td>Tanggal_berangkat</td>
			<td>Tanggal_pulang</td>
			<td>Penumpang_dewasa</td>
			<td>Penumpang_bayi</td>
			<td>ID_bus</td>
			<td>Action</td>
		</tr>
	
	<?php
		$query =  "select * from tb_destinasi";
		$hasil = mysql_query($query)or die ('Query Error');
		
		
		
		$hasil=mysql_query($query)or die(mysql_error());
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td>".$data['ID_pesanan']."
			</td>
			<td>".$data['Kota_asal']."
			</td>
			<td>".$data['Kota_tujuan']."
			</td>
			<td>".$data['Tanggal_berangkat']."
			</td>
			<td>".$data['Tanggal_pulang']."
			</td>
			<td>".$data['Penumpang_dewasa']."
			</td>
			<td>".$data['Penumpang_bayi']."
			</td>
			<td>".$data['ID_bus']."
			</td>
			<td><a href='index.php?page=edit_tb_destinasi&ID_pesanan=".$data['ID_pesanan']."'>edit</a>
			/ 
			<a href='hapus_tb_destinasi.php?ID_pesanan=".$data['ID_pesanan']."'>hapus</a>
			</td>
		</tr>";
		}
		
		
	?>
	</table>
	<?php
		}
	?>