<?php
	session_start();
?>
<html>
	<head>
		<title>TransAmpera</title>
	</head>
	<body>
	<style type="text/css">
	  table,tr,td{
	    	border-collapse: collapse;
	        border-color: #F4511E;
	        padding: 0px;
	        border-radius: 20px;
		}
		a.one:link, a.one:visited {
	        display: block;
	        font-weight: bold;
	        color: #ffffff;
	        background-color: #F4511E;
	        width: 300px;
	        text-align: center;
	        padding: 20px;
	        text-decoration: none;
	    }
	    
	    a.one:hover, a.one:active {
	        background-color: #BF360C;
	    }
	    a.two:link, a.two:visited {
	    color: red;
	    background-color: transparent;
	    text-decoration: none;
		}
		a.two:hover, a.two:active {
		    color: white;
		    background-color: transparent;
		    text-decoration: underline;
		}
		#back{
			box-shadow: 0px 0px 20px black;
			border-radius: 20px
		}
		#shadow:hover{
			box-shadow: 0px 0px 20px black;
			background-color: none;
			border-radius: 10px
		}
		#tombol:hover{
			background-color: #BF360C;
			border-radius: 20px;
		}
		</style>

		<table id="back" border="0" width="1000" align="center" bgcolor="#FFE0B2">
			<tr>
				<td>
					<table border="0" align="center" width="800" height="100">
						<tr>
							<td>
								<table border="0" bgcolor="white" align="center">
									<tr>
										<td rowspan="2" width="50">
										<a class="two" href="index.php"><img src="image/palak.png"></a>
										</td>
										<td colspan="4" rowspan="2" align="center">
											<font size="4" face="Cooper black" color="Red"><i>Kamu Pesan, Kami Jemput, Kito Berangkat...</i></font>
										</td>
									
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td bgcolor="#F4511E" align="center" colspan="2">
											<a class="one" href="index.php?page=carapemesanan">Cara Pemesanan</a>
											
										</td>
										
										<td bgcolor="#F4511E" align="center" colspan="2">
											<a class="one" href="index.php?page=pemesanan">Konfirmasi Pembayaran</a>
										</td>
										<td bgcolor="#F4511E" align="center" colspan="2">
											<a class="one" href="index.php?page=kontakkami">Kontak kami</a>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td align="center" height="600">
					<?php
		/*
		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
        */
        include("configdb.php");
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		
		?>
	<table id="back" border="0" align="center" width="800">
		<tr>
			<td>
				
	<table border="0" align="center" width="800">
		
		<tr>
			<th bgcolor="#F4511E" width="300" height="30" align="center">Kota Asal</th>
			<th bgcolor="#F4511E" width="300" height="30" align="center">Kota Tujuan</th>
			<th bgcolor="#F4511E" width="300" height="30" align="center">Jam Berangkat</th>
			<th bgcolor="#F4511E" width="300" height="30" align="center">Harga</th>
			<th bgcolor="#F4511E" width="300" height="30" align="center">Kapasitas Bus</th>
			<th bgcolor="#F4511E" width="300" height="30" align="center">Kursi Yang Tersedia</th>
			<th bgcolor="#F4511E" width="300" height="30" align="center">Pesan</th>
		</tr>
	
	<?php
		$query =  "select 
		tb_bus.no_bus,tb_bus.kapasitas,tb_bus.plat,
		tb_bus.kapasitas-COUNT(tb_tiket.kode_keberangkatan) AS sisa_kursi_kosong,
		tb_jadwal.tanggal,tb_jadwal.id_keberangkatan,
		tb_keberangkatan.id_keberangkatan,tb_keberangkatan.id_bus,tb_keberangkatan.kota_asal,tb_keberangkatan.kota_tujuan,tb_keberangkatan.jam_berangkat,tb_keberangkatan.harga,
		tb_tiket.no_tiket,tb_tiket.Nama,tb_tiket.KTP,tb_tiket.Alamat,tb_tiket.telepon,tb_tiket.tanggal,tb_tiket.kode_keberangkatan
		from 
		tb_keberangkatan 
		inner join tb_jadwal
		on tb_keberangkatan.id_keberangkatan=tb_jadwal.id_keberangkatan 
		
		inner join tb_bus 
		on tb_keberangkatan.id_bus=tb_bus.no_bus 
		
		inner join tb_tiket 
		on tb_tiket.kode_keberangkatan=tb_keberangkatan.id_keberangkatan
		
		where tb_keberangkatan.kota_asal 
		LIKE '%".$_GET['Asal']."%' and tb_keberangkatan.kota_tujuan LIKE '%".$_GET['Tujuan']."%' 
		and tb_jadwal.tanggal LIKE '%".$_GET['tglpergi']."%'
		
		GROUP BY tb_tiket.kode_keberangkatan
            ";
		$hasil = mysql_query($query)or die (mysql_error());
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td align='center'>".$data['kota_asal']."
			</td>
			<td align='center'>".$data['kota_tujuan']."
			</td>
			<td align='center'>".$data['jam_berangkat']."
			</td>
			<td align='center'>".$data['harga']."
			</td>
			<td align='center'>".$data['kapasitas']."
			</td>
			<td align='center'>".$data['sisa_kursi_kosong']."
			</td>
			<td align='center'>
			<a class='two' href='index.php?page=pemesanan&id_keberangkatan=".$data['id_keberangkatan']."'>Pesan Tiket</a>
			</td>
		</tr>";
		}
	?>
	</table>
	</td>
		</tr>
	</table>
				</td>
			</tr>	
		</table>
		<br>
	<table border="0" width="100%">
		<tr>
			<td bgcolor="#455A64" align="center">
				<img src="image/bayar.png">
			</td>
		</tr>
	</table>

	</body>
</html>