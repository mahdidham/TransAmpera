<html>
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
		#shadow:hover{
			box-shadow: 0px 0px 30px black;
			background-color: transparent;
			border-radius: 20px
		}
		</style>
	<table border="1" align="center" id="shadow">
		<tr>
			<td bgcolor="#8D6E63" align="center" colspan="2">
				<font color="white" face="forte" size="5">MENU ADMINISTRATOR </font>
			</td>
		</tr>
		<tr>
			<td>
				Data Login
			</td>
			<td  width="150" height="40" bgcolor="brown" align="center">
				<a class="two" href="index.php?page=listuser"><font color="white">Edit</font></a>
			</td>
		</tr>
		<tr>
			<td>
				Data Bus
			</td>
			<td  width="150" height="40" bgcolor="brown" align="center">
				<a class="two" href="index.php?page=tb_bus"><font color="white">Edit</font></a>
			</td>
		</tr>
		<tr>
			<td>
				Data Jadwal
			</td>
			<td  width="150" height="40" bgcolor="brown" align="center">
				<a class="two" href="index.php?page=tb_jadwal"><font color="white">Edit</font></a>
			</td>
		</tr>
		<tr>
			<td>
				Data Keberangkatan
			</td>
			<td  width="150" height="40" bgcolor="brown" align="center">
				<a class="two" href="index.php?page=tb_keberangkatan"><font color="white">Edit</font></a>
			</td>
		</tr>
		<tr>
			<td>
				Data Tiket
			</td>
			<td  width="150" height="40" bgcolor="brown" align="center">
				<a class="two" href="index.php?page=tb_tiket"><font color="white">Edit<font></a>
			</td>
		</tr>
		<tr>
			<td>
				Data Konfirmasi pemesanan
			</td>
			<td  width="150" height="40" bgcolor="brown" align="center">
				<a class="two" href="index.php?page=tb_konfirmasi"><font color="white">Edit<font></a>
			</td>
		</tr>
	</table>
</body>
</html>