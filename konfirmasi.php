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

				<table border="1" align="center" width="400" height="200">
				

					<?php
					session_start();
							
						$user="root";
						$pass="";
						$host="localhost";
						$database="transampera";
							
						$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
						$db=mysql_select_db($database) or die(mysql_error());

						$query="select * from tb_tiket where no_tiket LIKE '%".$_GET['no_tkt']."%'";
						$hasil=mysql_query($query)or die('query error');

						while($data =  mysql_fetch_array($hasil))
							{
								echo "<tr>
										<td align='center'>No Tiket</td>
										<td align='center'>:</td>
										<td align='center'>".$data['no_tiket']."</td>
									</tr>
									<tr>
										<td align='center'>ID Pemesan</td>
										<td align='center'>:</td>
										<td align='center'>".$data['ID_pesanan']."</td>
									</tr>
									<tr>
										<td align='center'>Nama</td>
										<td align='center'>:</td>
										<td align='center'>".$data['Nama']."</td>
									</tr>
									<tr>
										<td align='center'>KTP</td>
										<td align='center'>:</td>
										<td align='center'>".$data['KTP']."</td>
									</tr>
									<tr>
										<td align='center'>Alamat</td>
										<td align='center'>:</td>
										<td align='center'>".$data['Alamat']."</td>
									</tr>
									<tr>
										<td align='center'>No Telepon</td>
										<td align='center'>:</td>
										<td align='center'>".$data['telepon']."</td>
									</tr>";
							}

					?>
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