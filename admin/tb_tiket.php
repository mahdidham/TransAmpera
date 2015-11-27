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
		<td colspan="8" align="left">
		<a href="index.php?page=tambah_tb_tiket">+Tambah</a>
		</td>
		</tr>
		<tr>
			<td>No_Tiket</td>
			<td>Nama</td>
			<td>KTP</td>
			<td>Alamat</td>
			<td>Telepon</td>
			<td>Tanggal</td>
			<td>Kode Keberangkatan</td>
			<td>Action</td>
		</tr>
	
	<?php
		$query =  "select * from tb_tiket";
		$hasil = mysql_query($query)or die ('Query Error');
		
		
		
		$hasil=mysql_query($query)or die(mysql_error());
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td>".$data['no_tiket']."
			</td>
			<td>".$data['Nama']."
			</td>
			<td>".$data['KTP']."
			</td>
			<td>".$data['Alamat']."
			</td>
			<td>".$data['telepon']."
			</td>
			<td>".$data['tanggal']."
			</td>
			<td>".$data['kode_keberangkatan']."
			</td>
			<td><a href='index.php?page=edit_tb_tiket&no_tiket=".$data['no_tiket']."'>edit</a>
			/ 
			<a href='hapus_tb_tiket.php?no_tiket=".$data['no_tiket']."'>hapus</a>
			</td>
		</tr>";
		}
		
		
	?>
	</table>
	<?php
		}
	?>