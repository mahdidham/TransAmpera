
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
			
        /*
		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
        */
        include("configdb.php");
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		$query = "select * from tb_konfirmasi where no_konfirmasi = '".$_POST['no']."'";
		$hasil = mysql_query($query) or die ('Q');
		$hitung = mysql_num_rows($hasil);
		if($hitung==0)
		{
			if($_POST['no']==$_POST['no'])
			{
				$query = "insert into tb_konfirmasi values 
				(
				'".$_POST['no']."',
				'".$_POST['no_tiket']."',
				'".$_POST['nama']."',
				'".$_POST['tanggal']."',
				'".$_POST['jam']."',
				'".$_POST['bank']."',
				'".$_POST['uang']."',
				'Belum di konfirmasi'
				);";
				
				$hasil= mysql_query($query)or die('Querry');
				
				if($hasil)
				{
					echo "<script>
							alert('Konfirmasi Berhasil');
						
				  </script>";
				}
				else
				{
					echo "<script>
					alert('Konfirmasi Gagal');
						window.history.back();
				  </script>";
				}
			}
			else
			{
				echo "<script>
						alert('password Anda Tidak Sesuai');
						window.history.back();
				  </script>";
			}
		}
		else
		{
			echo "<script>
						alert('Username Telah Digunakan');
						window.history.back();
				  </script>";
		}
			
?>
	<table id="lengkung" border="0" align="center" width="450">
		<tr>
			<td>
				<form action="convert2.php" method="POST">
				<table  align="center" border="0" width="400">
					<tr>
						<td bgcolor="#F4511E" colspan="3" align="center"><b><br><font face="Calibri" color="white">BUKTI KONFIRMASI TIKET BUS TRANSAMPERA</font><br>&nbsp;</b></td>
					</tr>
					<tr>
						<td height="30"><?php echo "No Konfirmasi";?></td>
						<td><?php echo ":" ?></td>
						<td><?php echo $_POST['no']; ?><input type="hidden" name="no_konfirmasi" value=<?php echo $_POST['no']; ?>></td>
					</tr>
					<tr>
						<td height="30"><?php echo "Kode Tiket";?></td>
						<td><?php echo ":" ?></td>
						<td><?php echo $_POST['no_tiket']; ?><input type="hidden" name="no_tiket" value=<?php echo $_POST['no_tiket']; ?>></td>
					</tr>
					<tr>
						<td height="30"><?php echo "Nama";?></td>
						<td><?php echo ":" ?></td>
						<td><?php echo "".$_POST['nama']."";?></td>
					</tr>
					<tr>
						<td height="30"><?php echo "Tanggal Transfer";?></td>
						<td><?php echo ":" ?></td>
						<td><?php echo "".$_POST['tanggal']."";?></td>
					</tr>
					<tr>
						<td height="30"><?php echo "Jam_Transfer";?></td>
						<td><?php echo ":" ?></td>
						<td><?php echo "".$_POST['jam']."";?></td>
					</tr>
					<tr>
						<td height="30"><?php echo "Bank_Tujuan";?></td>
						<td><?php echo ":" ?></td>
						<td><?php echo "".$_POST['bank']."";?></td>
					</tr>
					<tr>
						<td height="30"><?php echo "Nominal";?></td>
						<td><?php echo ":" ?></td>
						<td><?php echo "".$_POST['uang']."";?></td>
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