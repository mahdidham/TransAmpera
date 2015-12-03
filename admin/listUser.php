<?php
		if(isset($_SESSION['login']))
		{
        /*
		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		*/
        include('../configdb.php');
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		
		?>
	<table border="1" align="center">
		<tr>
			<td>Nama</td>
			<td>Username</td>
			<td>Password</td>
			<td>Status</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
	
	<?php
		$query =  "select * from tb_login";
		$hasil = mysql_query($query)or die ('Query Error');
		
		$jumlah_baris=mysql_num_rows($hasil);
		$jumlah_record_per_page=4;
		$jumlah_page=ceil($jumlah_baris/$jumlah_record_per_page);
		
		
		if(!isset($_GET['page_number'])){
			$page_number=1;
		}
		else if($_GET['page_number']<1){
			$page_number=1;
		}
		else if($_GET['page_number']> $jumlah_page){
			$page_number=$_GET['page_number'];
		}
		else{
			$page_number=$_GET['page_number'];
		}
		
		$start_number=($page_number-1)*$jumlah_record_per_page;
		
		$query="select * from tb_login LIMIT ".$start_number.",".$jumlah_record_per_page."";
		
		$hasil=mysql_query($query)or die(mysql_error());
		
		while($data =  mysql_fetch_array($hasil))
		{
			echo "<tr>
			<td>".$data['Nama']."
			</td>
			<td>".$data['Username']."
			</td>
			<td>".$data['Password']."
			</td>
			<td>".$data['Status']."
			</td>
			<td>".$data['Email']."
			</td>
			<td><a href='index.php?page=editUser&Username=".$data['Username']."'>edit</a>
			/ 
			<a href='hapusUser.php?Username=".$data['Username']."'>hapus</a>
			</td>
		</tr>";
		}
		
		echo 
				"<tr>
						<td align='center' colspan='6' >";
						
			echo "<a href='index.php?page=listUser&page_number=1'>First</a>";	
			
							if($page_number==1)
								echo "<a href='index.php?page=listUser&page_number=1'> &nbsp; << &nbsp; Prev &nbsp;</a>";
							
							else
								echo "<a href='index.php?page=listUser&page_number=".($page_number-1)."'> &nbsp; << &nbsp; Prev &nbsp;</a>";
							
							if($page_number==$jumlah_page)
								echo "<a href='index.php?page=listUser&page_number=".$jumlah_page."'> &nbsp; Next &nbsp; >></a>";
							
							else
								echo "<a href='index.php?page=listUser&page_number=".($page_number+1)."'>&nbsp; Next &nbsp; >></a>";
							
								echo "<a href='index.php?page=listUser&page_number=".$jumlah_page."'> &nbsp; Last &nbsp;</a>";
			echo 
						"</td>
				</tr>";
		
	?>
	</table>
	<?php
		}
	?>