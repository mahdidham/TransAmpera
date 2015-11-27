
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
		</style>

		<table border="1" width="1000" align="center" bgcolor="#FFE0B2">
			<tr>
				<td>
					<table border="1" align="center" width="800" height="100">
						<tr>
							<td>
								<table border="0" bgcolor="white" align="center">
									<tr>
										<td rowspan="2" width="50">
										<a class="two" href="index.php"><img src="../image/palak.png"></a>
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
			

		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query = "select * from tb_tiket where no_tiket = '".$_POST['no_tiket']."'";
		$hasil = mysql_query($query) or die ('Query Error');
		$hitung = mysql_num_rows($hasil);
		if($hitung==0)
		{
			if($_POST['no_tiket']==$_POST['no_tiket'])
			{
				$query = "insert into tb_tiket values ('".$_POST['no_tiket']."','".$_POST['ID_pesanan']."','".$_POST['Nama']."','".$_POST['KTP']."','".$_POST['Alamat']."','".$_POST['telepon']."');";
				
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
		
		
		
		$query1 = "select * from tb_destinasi where ID_pesanan = '".$_POST['ID_pesanan']."'";
		$hasil1 = mysql_query($query1) or die ('Query Error');
		$hitung1 = mysql_num_rows($hasil1);
		if($hitung1==0)
		{
			if($_POST['ID_pesanan']==$_POST['ID_pesanan'])
			{
				$query1 = "insert into tb_destinasi values ('".$_POST['ID_pesanan']."','".$_POST['Kota_asal']."','".$_POST['Kota_tujuan']."','".$_POST['Tanggal_berangkat']."','".$_POST['Tanggal_pulang']."','".$_POST['Penumpang_dewasa']."','".$_POST['Penumpang_bayi']."','".$_POST['ID_bus']."');";
				
				$hasil1= mysql_query($query1)or die('Querry Error');
				
				if($hasil1)
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
						alert('No ID_pesanan Digunakan');
						window.history.back();
				  </script>";
			}
		}
		else
		{
			echo "<script>
						alert('No ID_pesanan Digunakan');
						window.history.back();
				  </script>";
		}
		
		
		

		

$nama=$_POST['Nama'];
$kode=$_POST['ID_bus'];
$jumlah1=$_POST['Penumpang_dewasa'];
$jumlah2=$_POST['Penumpang_bayi'];
$jumlah=$jumlah1+$jumlah2;
$Harga=$_POST['Harga'];

if ($kode=="001")
   {
       $jurusan="Palembang-Muaraenim";
       $biaya=40000;
       }
else if ($kode=="002")
     {
       $jurusan="Palembang-Prabumulih";
       $biaya=25000;  }
else if ($kode=="003")
     {
       $jurusan="Palembang-Lahat";
       $biaya=65000;  }
else if ($kode=="004")
     {
       $jurusan="Palembang-Pagaralam";
       $biaya=80000;  }
else if ($kode=="005")
     {
       $jurusan="Palembang-OKI";
       $biaya=95000;  }
else
      {
       $jurusan="Palembang-OKU";
       $biaya=100000;  }
      
$total=$Harga*$jumlah;
$tgl=date ("d/m/y");
$jam=date("h:m:s a");
$kodetiket=$_POST['no_tiket'];
$nopemesanan=$_POST['ID_pesanan'];
?>
<table border="1">
<tr><td colspan="3" align="center"><b><br>BUKTI PEMESANAN TIKET BUS TRANSAMPERA<br>&nbsp;</b></td>
<tr>
<td><?php echo "Kode Tiket";?></td>
<td><?php echo ":" ?></td>
<td><?php echo "$kodetiket";?></td>
</tr>
<tr>
<td><?php echo "Kode Pemesanan";?></td>
<td><?php echo ":" ?></td>
<td><?php echo "$nopemesanan";?></td>
</tr>
<tr>
<td><?php echo "Nama Pemesan";?></td>
<td><?php echo ":" ?></td>
<td><?php echo "".$_POST['Nama']."";?></td>
</tr>
<tr>
<td><?php echo "Kode Jurusan";?></td>
<td><?php echo ":" ?></td>
<td><?php echo "$kode";?></td>
</tr>
<tr>
<td><?php echo "Jurusan";?></td>
<td><?php echo ":" ?></td>
<td><?php echo "$jurusan";?></td>
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
<td colspan="3" align="center">
	<input type="submit" value="Simpan/Cetak"></td>
</tr>	
		</table>
				</td>
			</tr>	
		</table>
		<br>
		<table border="0" width="100%" heig>
			<tr>
				<td bgcolor="#455A64" align="center">
					<img src="../image/bayar.png">
				</td>
			</tr>
		</table>

	</body>
</html>