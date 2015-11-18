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
	<table border="1" width="350" height="40" align="Left"><tr>
			<td align="center" bgcolor="white"><font face="tahoma"><a class="two" href="index.php?page=tambahjadwal">Tambah Jadwal Keberangkatan</a></font></td>
			</tr>
	</table>
	<br><br><br>
	<table border="1" align="center">
		<tr>
			<td width="300" height="30" align="center">Kode_Keberangkatan</td>
			<td width="300" height="30" align="center">Hari</td>
			<td width="300" height="30" align="center">Jam</td>
			<td width="300" height="30" align="center">Asal</td>
			<td width="300" height="30" align="center">Tujuan</td>
			<td width="300" height="30" align="center">Pesan</td>
		</tr>
	
	<?php
		$query =  "select * from jadwal_keberangkatan";
		$hasil = mysql_query($query)or die ('Query Error');
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td align='center'>".$data['Kode_Keberangkatan']."
			</td>
			<td align='center'>".$data['Hari']."
			</td>
			<td align='center'>".$data['Jam']."
			</td>
			<td align='center'>".$data['Asal']."
			</td>
			<td align='center'>".$data['Tujuan']."
			</td>
			<td align='center'><a class='two' href='index.php?page=editjadwal&Kode_Keberangkatan=".$data['Kode_Keberangkatan']."'>Edit</a>
			/ 
			<a class='two' href='hapusjadwal.php?Kode_Keberangkatan=".$data['Kode_Keberangkatan']."'>Hapus</a>
			</td>
		</tr>";
		}
	?>
	</table>
	<?php
		}
		else{
			$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		
		?>
	<table border="1" align="center">
		<tr>
			<td width="300" height="30" align="center">Kode Keberangkatan</td>
			<td width="300" height="30" align="center">Hari</td>
			<td width="300" height="30" align="center">Jam</td>
			<td width="300" height="30" align="center">Asal</td>
			<td width="300" height="30" align="center">Tujuan</td>
			<td width="300" height="30" align="center">Pesan</td>
		</tr>
	
	<?php
		$query =  "select * from jadwal_keberangkatan";
		$hasil = mysql_query($query)or die ('Query Error');
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td align='center'>".$data['Kode_Keberangkatan']."
			</td>
			<td align='center'>".$data['Hari']."
			</td>
			<td align='center'>".$data['Jam']."
			</td>
			<td align='center'>".$data['Asal']."
			</td>
			<td align='center'>".$data['Tujuan']."
			</td>
			<td align='center'><a class='two' href='index.php?page=pemesanan'>Pesan Tiket</a>
			</td>
		</tr>";
		}
	?>
	</table>
	<?php
		}
		?>