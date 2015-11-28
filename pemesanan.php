<html>
<head>
       <title>PEMESANAN</title>
</head>
<body>

<?php
$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query="select * from tb_keberangkatan where id_keberangkatan = '".$_GET['id_keberangkatan']."'";
		
		$hasil=mysql_query($query)or die('query error');
		$data=mysql_fetch_array($hasil);
?>


<form action="prosespemesanan.php" method="POST">
<table border=1 width="35%" cellpadding="4px">
<tr>
    <th colspan="2">PEMESANAN TIKET BUS TRANSAMPERA</th>
</tr>
<tr>
	<td colspan="2" align="left"><br><font face="forte" size="3" color="brown">Data Diri</font><br>&nbsp;</td>
</tr>
<tr>
    <td>No Tiket</td>
    <td>
	<input type="text" name="no_tiket"
	value="<?php 
	$a = (rand()%9);
	$b = (rand()%9);
	$c = (rand()%9);
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
	<td colspan="2" align="left"><font face="forte" size="3" color="brown"><br>Data Destinasi</font><br>&nbsp;</td>
</tr>
<tr>
    <td>Kota Asal</td>
    <td><input type="text" name="Kota_asal"
				value="<?php echo $data['kota_asal']; ?>"></td>
</tr>
<tr>
    <td>Kota Tujuan</td>
    <td><input type="text" name="Kota_tujuan"
				value="<?php echo $data['kota_tujuan']; ?>"></td>
</tr>
<tr>
    <td>Tanggal Berangkat</td>
    <td><input type="date" name="Tanggal_berangkat"></td>
</tr>
<tr>
    <td>Harga Tiket</td>
    <td><input type="text" name="Harga"
				value="<?php echo $data['harga']; ?>"></td>
</tr>
<td align="left">Kursi Yang Tersedia</td>
<td>15 Kursi</td>
</tr>
<tr>
<td>Jumlah Tiket</td>
<td><input type="number" name="jumlah_tiket" min="0" max="5"></td>
</tr>

<tr>
    <td>ID Bus</td>
    <td><input type="text" name="id_bus"
				value="<?php echo $data['id_bus']; ?>"></td>
</tr>
<input type="hidden" name="id_keberangkatan" value="<?php echo $data['id_keberangkatan']?>">
<tr>
    <td colspan="2" align="center"><input type="submit" name="bpesan" value="PESAN"><input type="reset" name="bbatal" value="BATAl"></td>
</tr>
</table>
</form>
</body>
</html>
