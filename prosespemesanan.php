
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
		    color: blue;
		    background-color: transparent;
		    text-decoration: underline;
		}
		#back{
			box-shadow: 0px 0px 30px black;
			border-radius: 20px
		}
		#shadow:hover{
			box-shadow: 0px 0px 30px black;
			border-radius: 0px
		}
		#lengkung{
		box-shadow: 0px 0px 30px black;
		border-radius: 20px
		}
		#tombol:hover{
			box-shadow: 0px 0px 15px black;
			border-radius: 20px
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
											<a class="one" href="index.php?page=Konfirmasi">Konfirmasi Pembayaran</a>
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
			

		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query = "select * from 
		tb_tiket as tt
		JOIN tb_keberangkatan as tk
		JOIN tb_bus as tb
		JOIN tb_jadwal as tj
		ON
		tt.kode_keberangkatan=tk.id_keberangkatan=tj.id_keberangkatan
		and
		tk.id_bus=tb.no_bus
		where no_tiket = '".$_POST['no_tiket']."'";
		$hasil = mysql_query($query) or die ('Query Error');
		$hitung = mysql_num_rows($hasil);
		if($hitung==0)
		{
			if($_POST['no_tiket']==$_POST['no_tiket'])
			{
				$query = "insert into tb_tiket values ('".$_POST['no_tiket']."','".$_POST['Nama']."','".$_POST['KTP']."','".$_POST['Alamat']."','".$_POST['telepon']."','".$_POST['Tanggal_berangkat']."','".$_POST['id_keberangkatan']."');
                ";
				
				$hasil= mysql_query($query)or die('Querry Error');
				
				if($hasil)
				{
					echo "<script>
							alert('Pemesanan Berhasil');
						
				  </script>";
				}
				else
				{
					echo "<script>
					alert('Pemesanan Gagal');
						window.history.back();
				  </script>";
				}
			}
			else
			{
				echo "<script>
						alert('No Tiket Telah Digunakan');
						window.history.back();
				  </script>";
			}
		}
		else
		{
			echo "<script>
						alert('No Tiket Telah Digunakan');
						window.history.back();
				  </script>";
		}
		
		
				

$nama=$_POST['Nama'];
$kode=$_POST['id_keberangkatan'];
$Harga=$_POST['Harga'];
$asal=$_POST['Kota_asal'];
$tujuan=$_POST['Kota_tujuan'];
$jumlah=1;
      
$total=$Harga;
$tgl=date ("d/m/y");
$jam=date("h:m:s a");
$kodetiket=$_POST['no_tiket'];

?>
<table align="center" id="lengkung" border="0" width="450">
	<tr>
		<td>
		<form action="convert.php" method="POST">
		<table align="center" border="0" width="400">
			<tr>
				<td bgcolor="#F4511E" colspan="3" align="center"><b><br><font color="white" size="3">BUKTI PEMESANAN TIKET BUS TRANSAMPERA</font><br>&nbsp;</b></td>
			</tr>
			<tr>
				<td><?php echo "Kode Tiket";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo $_POST['no_tiket']; ?><input type="hidden" name="no_tiket" value=<?php echo $_POST['no_tiket']; ?>></td>
			</tr>
			<tr>
				<td><?php echo "Nama Pemesan";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "".$_POST['Nama']."";?></td>
			</tr>
			<tr>
				<td><?php echo "Kode Keberangkatan";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "$kode";?></td>
			</tr>
			<tr>
				<td><?php echo "Tanggal Berangkat";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "".$_POST['Tanggal_berangkat']."";?></td>
			</tr>
			<tr>
				<td><?php echo "Jam Berangkat";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "".$_POST['jam_berangkat']."";?></td>
			</tr>
			<tr>
				<td><?php echo "Dari";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "$asal";?></td>
			</tr>
			<tr>
				<td><?php echo "Ke";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "$tujuan";?></td>
			</tr>
			<tr>
				<td><?php echo "Biaya Tiket";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "Rp.$Harga";?></td>
			</tr>
			<tr>
				<td><?php echo "Jumlah Tiket Yang Dipesan";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "$jumlah";?></td>
			</tr>
			<tr>
				<td><?php echo "Total Biaya Yang Harus Dibayar";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "Rp.$total";?></td>
			</tr>
			<tr>
				<td><?php echo "Tanggal Pesan";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "$tgl";?></td>
			</tr>
			<tr>
				<td><?php echo "Jam";?></td>
				<td><?php echo ":" ?></td>
				<td><?php echo "$jam";?></td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input id="tombol" type="submit" value="Simpan/Cetak">
				</td>
			</tr>	
		</form>
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