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
		<td colspan="9" align="left">
		<a href="index.php?page=tambah_tb_keberangkatan">+Tambah</a>
		</td>
		</tr>
		<tr>
			<td>ID Keberangkatan</td>
			<td>ID Bus</td>
			<td>Kota Asal</td>
			<td>Kota Tujuan</td>
			<td>Jam Berangkat</td>
			<td>Harga</td>
			<td>Action</td>
		</tr>
	
	<?php
		$query =  "select * from tb_keberangkatan";
		$hasil = mysql_query($query)or die ('Query Error');
		
		
		
		$hasil=mysql_query($query)or die(mysql_error());
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td>".$data['id_keberangkatan']."
			</td>
			<td>".$data['id_bus']."
			</td>
			<td>".$data['kota_asal']."
			</td>
			<td>".$data['kota_tujuan']."
			</td>
			<td>".$data['jam_berangkat']."
			</td>
			<td>".$data['harga']."
			</td>
			<td><a href='index.php?page=edit_tb_keberangkatan&id_keberangkatan=".$data['id_keberangkatan']."'>edit</a>
			/ 
			<a href='hapus_tb_keberangkatan.php?id_keberangkatan=".$data['id_keberangkatan']."'>hapus</a>
			</td>
		</tr>";
		}
		
		
	?>
	</table>
	<?php
		}
	?>