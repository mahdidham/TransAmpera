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
			<td align='center'>Nama</td>
			<td align='center'>NoID</td>
			<td align='center'>Telpon</td>
			<td align='center'>Asal</td>
			<td align='center'>Tujuan</td>
			<td align='center'>Tanggal Berangkat</td>
			<td align='center'>Tiket Dewasa</td>
			<td align='center'>Tiket Anak</td>
			<td align='center'>Tiket Balita</td>
			<td align='center'>Status</td>
			<td align='center'>Proses</td>
		</tr>
	
	<?php
		$query =  "select * from pemesanan";
		$hasil = mysql_query($query)or die ('Query Error');
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td align='center'>".$data['Nama']."
			</td>
			<td align='center'>".$data['NoID']."
			</td>
			<td align='center'>".$data['Telpon']."
			</td>
			<td align='center'>".$data['Asal']."
			</td>
			<td align='center'>".$data['Tujuan']."
			</td>
			<td align='center'>".$data['Tanggal_Berangkat']."
			</td>
			<td align='center'>".$data['Tiket_Dewasa']."
			</td>
			<td align='center'>".$data['Tiket_Anak']."
			</td>
			<td align='center'>".$data['Tiket_Balita']."
			</td>
			<td align='center'>".$data['Status']."
			</td>
			<td align='center'><a href='index.php?page=editpemesanan&NoID=".$data['NoID']."'>edit</a>
			/ 
			<a href='hapuspemesanan.php?NoID=".$data['NoID']."'>hapus</a>
			</td>
		</tr>";
		}
	?>
	</table>
	<?php
		}
	?>