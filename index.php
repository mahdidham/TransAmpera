
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
		#back{
			box-shadow: 0px 0px 30px black;
			border-radius: 30px
		}
		</style>

		<table border="0" width="1000" align="center" bgcolor="#FFE0B2" id="back">
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
						if(!isset($_GET['page'])){
							include('home.html');
						}
						else if ($_GET['page'] == 'kontakkami') {
							include('kontakkami.html');
						}
						else if ($_GET['page'] == 'pemesanan') {
							include('pemesanan.php');
						}
						else if ($_GET['page'] == 'jadwal') {
							include('jadwal.php');
						}
						else if ($_GET['page'] == 'listuser') {
							include('listuser.php');
						}
						else if ($_GET['page'] == 'editjadwal') {
							include('editjadwal.php');
						}
						else if ($_GET['page'] == 'editpemesanan') {
							include('editpemesanan.php');
						}
						else if ($_GET['page'] == 'daftarpemesanan') {
							include('daftarpemesanan.php');
						}
						else if ($_GET['page'] == 'daftarpelanggan') {
							include('daftarpelanggan.php');
						}
						else if ($_GET['page'] == 'editUser') {
							include('editUser.php');
						}
						else if ($_GET['page'] == 'admin') {
							include('admin.html');
						}
						else if ($_GET['page'] == 'login') {
							include('login.html');
						}
						else if ($_GET['page'] == 'logout') {
							include('logout.php');
						}
						else{
							$page=$_GET['page'].".html";
							include($page);
						}
					?>
				</td>
			</tr>	
		</table>
		<br>
		<table border="0" width="100%" heig>
			<tr>
				<td bgcolor="#455A64" align="center">
					<img src="image/bayar.png">
				</td>
			</tr>
		</table>

	</body>
</html>