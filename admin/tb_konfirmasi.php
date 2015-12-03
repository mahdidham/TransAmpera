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
		<a href="index.php?page=tambah_tb_konfirmasi">+Tambah</a>
		</td>
		</tr>
		<tr>
			<td>No Konfirmasi</td>
			<td>No Tiket</td>
			<td>Nama</td>
			<td>Tanggal Transfer</td>
			<td>Jam Transfer</td>
			<td>Bank Tujuan</td>
			<td>Nominal</td>
			<td>Keterangan</td>
			<td>Action</td>
		</tr>
	
	<?php
		$query =  "select * from tb_konfirmasi";
		$hasil = mysql_query($query)or die ('Query Error');
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td>".$data['no_konfirmasi']."
			</td>
			<td>".$data['no_tiket']."
			</td>
			<td>".$data['nama']."
			</td>
			<td>".$data['tanggal_transfer']."
			</td>
			<td>".$data['jam_transfer']."
			</td>
			<td>".$data['bank_tujuan']."
			</td>
			<td>".$data['nominal']."
			</td>
			<td>".$data['Keterangan']."
			</td>
			<td><a href='index.php?page=edit_tb_konfirmasi&no_konfirmasi=".$data['no_konfirmasi']."'>edit</a>
			/ 
			<a href='hapus_tb_konfirmasi.php?no_konfirmasi=".$data['no_konfirmasi']."'>hapus</a>
			</td>
		</tr>";
		}
		
		
	?>
	</table>
	<?php
		}
	?>