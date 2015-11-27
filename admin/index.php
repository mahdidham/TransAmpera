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
										<?php if(!isset($_SESSION['login'])){
											echo "<td width='300' align='center'><a href='index.php?page=login-admin'>Login</a></td>";
											}
											else{
											echo "<td width='300' align='center'><a href='index.php?page=administrator'>Home</a>|
													<a href='logout.php'>Logout</a>|<a href='index.php?page=daftar'>Tambah Hak Akses</a>
											</td>";
											}
										?>
										
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td bgcolor="#F4511E" align="center" colspan="2">
											<a class="one" href="#"><font color="#F4511E"></font></a>
											
										</td>
										
										<td bgcolor="#F4511E" align="center" colspan="2">
											<a class="one" href="#"><font color="#F4511E"></font></a>
										</td>
										<td bgcolor="#F4511E" align="center" colspan="2">
											<a class="one" href="#"><font color="#F4511E"></font></a>
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
							include('administrator.php');
						}
						else if ($_GET['page'] == 'kontakkami') {
							include('kontakkami.html');
						}
						else if ($_GET['page'] == 'administrator') {
							include('administrator.php');
						}
						else if ($_GET['page'] == 'pemesanan') {
							include('pemesanan.html');
						}
						else if ($_GET['page'] == 'daftar') {
							include('daftar.html');
						}
						else if ($_GET['page'] == 'tb_bus') {
							include('tb_bus.php');
						}
						else if ($_GET['page'] == 'tambah_tb_bus') {
							include('tambah_tb_bus.html');
						}
						else if ($_GET['page'] == 'tb_jadwal') {
							include('tb_jadwal.php');
						}
						else if ($_GET['page'] == 'tambah_tb_jadwal') {
							include('tambah_tb_jadwal.html');
						}
						else if ($_GET['page'] == 'tb_keberangkatan') {
							include('tb_keberangkatan.php');
						}
						else if ($_GET['page'] == 'tambah_tb_keberangkatan') {
							include('tambah_tb_keberangkatan.html');
						}
						else if ($_GET['page'] == 'tb_tiket') {
							include('tb_tiket.php');
						}
						else if ($_GET['page'] == 'tambah_tb_tiket') {
							include('tambah_tb_tiket.html');
						}
						else if ($_GET['page'] == 'listuser') {
							include('listUser.php');
						}
						else if ($_GET['page'] == 'listUser') {
							include('listUser.php');
						}
						else if ($_GET['page'] == 'edit_tb_bus') {
							include('edit_tb_bus.php');
						}
						else if ($_GET['page'] == 'edit_tb_jadwal') {
							include('edit_tb_jadwal.php');
						}
						else if ($_GET['page'] == 'edit_tb_keberangkatan') {
							include('edit_tb_keberangkatan.php');
						}
						else if ($_GET['page'] == 'edit_tb_tiket') {
							include('edit_tb_tiket.php');
						}
						else if ($_GET['page'] == 'editUser') {
							include('editUser.php');
						}
						else if ($_GET['page'] == 'admin') {
							include('admin.html');
						}
						else if ($_GET['page'] == 'login') {
							include('login-admin.html');
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
		
	</body>
</html>