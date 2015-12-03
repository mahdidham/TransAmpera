<html>
<head>
       <title>PEMESANAN</title>
</head>
<body>
<style>
	table,tr,td,th{
	    	border-collapse: collapse;
	        border-color: #F4511E;
	        padding: 0px;
	        border-radius: 20px;
		}
	#shadow{
		box-shadow: 0px 0px 30px black;
		border-radius: 20px
	}
	#tombol:hover{
		box-shadow: 0px 0px 15px black;
		border-radius: 20px
	}
</style>
<?php
$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query="select * from tb_keberangkatan as tk JOIN tb_jadwal as tj ON tk.id_keberangkatan=tj.id_keberangkatan where tk.id_keberangkatan&&tj.id_keberangkatan = '".$_GET['id_keberangkatan']."'";
		
		$hasil=mysql_query($query)or die('query error');
		$data=mysql_fetch_array($hasil);
		
		$a = (rand()%9);
				$b = (rand()%9);
				$c = (rand()%9);
?>


<form action="prosespemesanan.php" method="POST">
<table border="0" id="shadow" align="center" width="350">
	<tr>
		<td>
		<table border="0" align="center">
			<tr>
		 	   <th width="300" height="50" bgcolor="#F4511E" colspan="2"><font face="Calibri" size="3" color="White">PEMESANAN TIKET BUS TRANSAMPERA</font></th>
			</tr>
			<tr>
				<td colspan="2" align="center"><br><font face="forte" size="3" color="brown">Data Diri</font><br>&nbsp;</td>
			</tr>
			<tr>
			    <td>No Tiket</td>
			    <td><?php echo "$a$c$c"; ?>
				<input type="hidden" name="no_tiket"
				value="<?php 
				
				echo "$a$c$c"; 
				?>">
				</td>
			</tr>

			<tr>
			    <td>Nama Pemesan</td>
			    <td><input type="text" name="Nama"></td>
			</tr>
			<tr>
			    <td>No KTP</td>
			    <td><input type="text" name="KTP"></td>
			</tr>
			<tr>
			    <td>Alamat Pemesan</td>
			    <td><input type="text" name="Alamat"></td>
			</tr>
			<tr>
			    <td>Telepon</td>
			    <td><input type="text" name="telepon"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><font face="forte" size="3" color="brown"><br>Data Destinasi</font><br>&nbsp;</td>
			</tr>
			<tr>
			    <td>Kota Asal</td>
			    <td><?php echo $data['kota_asal']; ?><input type="hidden" name="Kota_asal"
							value="<?php echo $data['kota_asal']; ?>"></td>
			</tr>
			<tr>
			    <td>Kota Tujuan</td>
			    <td><?php echo $data['kota_tujuan']; ?><input type="hidden" name="Kota_tujuan"
							value="<?php echo $data['kota_tujuan']; ?>"></td>
			</tr>
			<tr>
			    <td>Tanggal Berangkat</td>
			    <td><?php echo $data['tanggal']; ?><input type="hidden" name="Tanggal_berangkat" value="<?php echo $data['tanggal']; ?>"></td>
			</tr>
			<tr>
			    <td>Jam Berangkat</td>
			    <td><?php echo $data['jam_berangkat']; ?><input type="hidden" name="jam_berangkat" value="<?php echo $data['jam_berangkat']; ?>"></td>
			</tr>
			<tr>
			    <td>Harga Tiket</td>
			    <td><?php echo $data['harga']; ?><input type="hidden" name="Harga"
							value="<?php echo $data['harga']; ?>"></td>
			</tr>
			

			<tr>
			    <td>ID Bus</td>
			    <td><?php echo $data['id_bus']; ?><input type="hidden" name="id_bus"
							value="<?php echo $data['id_bus']; ?>"></td>
			</tr>
			<input type="hidden" name="id_keberangkatan" value="<?php echo $data['id_keberangkatan']?>">
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
			    <td colspan="2" align="center"><input id="tombol" type="submit" name="bpesan" value="PESAN"><input id="tombol" type="reset" name="bbatal" value="BATAl"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</form>
</body>
</html>
