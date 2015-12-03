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
		#shadow{
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
				<form action="proseskonfirmasi.php" method="post">
				<table id="shadow" align="center" border="0" width="450">
					<tr>
						<td>
				<table border="0" align="center" width="400" height="200">		
				<?php
						$a = (rand()%9);
						$b = (rand()%9);
						$c = (rand()%9);
                        include("configdb.php");
                    /*
						$user="root";
						$pass="";
						$host="localhost";
						$database="transampera";
                    */
							
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
						where no_tiket LIKE '%".$_GET['no_tkt']."%'";
						
						$hasil=mysql_query($query)or die('query error');
						
										

						while($data =  mysql_fetch_array($hasil))
							{
								echo "
									<tr>
										<td colspan='3' height='50' bgcolor='#F4511E' align='center'><font face='Calibri' color='white' size='4'>Data Pemesanan</font></td>
									</tr>
									<tr>
										<td align='left'>No Tiket</td>
										<td align='left'>:</td>
										<td align='left'>".$data['no_tiket']."</td>
									</tr>
									
									<tr>
										<td align='left'>Nama</td>
										<td align='left'>:</td>
										<td align='left'>".$data['Nama']."</td>
									</tr>
									<tr>
										<td align='left'>KTP</td>
										<td align='left'>:</td>
										<td align='left'>".$data['KTP']."</td>
									</tr>
									<tr>
										<td align='left'>Alamat</td>
										<td align='left'>:</td>
										<td align='left'>".$data['Alamat']."</td>
									</tr>
									<tr>
										<td align='left'>No Telepon</td>
										<td align='left'>:</td>
										<td align='left'>".$data['telepon']."</td>
									</tr>
									<tr>
										<td align='left'>Kode Keberangkatan</td>
										<td align='left'>:</td>
										<td align='left'>".$data['kode_keberangkatan']."</td>
									</tr>
									<tr>
										<td align='left'>Total Yang Harus Dibayar</td>
										<td align='left'>:</td>
										<td align='left'>".$data['harga']."</td>
									</tr>
									<tr>
										<td align='left'>Tanggal Berangkat</td>
										<td align='left'>:</td>
										<td align='left'>".$data['tanggal']."</td>
									</tr>
									<tr>
										<td align='left'>Jam Berangkat</td>
										<td align='left'>:</td>
										<td align='left'>".$data['jam_berangkat']."</td>
									</tr>
									<tr>
										<td align='left'>Kota Asal</td>
										<td align='left'>:</td>
										<td align='left'>".$data['kota_asal']."</td>
									</tr>
									<tr>
										<td align='left'>Kota Tujuan</td>
										<td align='left'>:</td>
										<td align='left'>".$data['kota_tujuan']."</td>
									</tr>
							
						
						
						
									<tr>
										<td colspan='3' height='50' bgcolor='#F4511E' align='center'><font face='Calibri' color='White' size='4'>Data Pembayaran</font></td>
									</tr>
									
									<tr>
										<td>No Konfirmasi</td>
										<td align='left'>:</td>
										<td>$a$b$c
										<input type='hidden' name='no'
										value='$a$b$c'>
										</td>
									</tr>
									
									<tr>
										<td>No Tiket</td>
										<td align='left'>:</td>
										<td>".$data['no_tiket']."
										<input type='hidden' name='no_tiket'
										value=' ".$data['no_tiket']."'>
										</td>
									</tr>";
									}
?>
									<tr>
										<td align="left">Nama</td>
										<td align="left">:</td>
										<td align="left"><input type="text" name="nama" </td>
									</tr>
									<tr>
										<td align="left">Tanggal Transfer</td>
										<td align="left">:</td>
										<td align="left"><input type="date" name="tanggal"</td>
									</tr>
									<tr>
										<td align="left">Jam Transfer</td>
										<td align="left">:</td>
										<td align="left"><input type="time" name="jam"</td>
									</tr>
									<tr>
										<td align="left">Bank Tujuan</td>
										<td align="left">:</td>
										<td align="left">
											<select name="bank">
												<option value="Mandiri">Mandiri</option>
												<option value="BNI">BNI</option>
												<option value="BCA">BCA</option>
											</select>
										</td>
									</tr>
									<tr>
										<td align="left">Nominal Yang Ditransfer</td>
										<td align="left">:</td>
										<td align="left"><input type="text" name="uang" </td>
									</tr>
									
									<tr>
										<td colspan="3" align="center">
											<input id="tombol" type="submit" value="Konfirmasi">
										</td>
									</tr>
									</table>

							</td>
						</tr>
					</table>
						</form>
				
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



