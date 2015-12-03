<html>
<head>
       <title>BUKTI PEMESANAN</title>
</head>
<body>
<h3>BUKTI PEMESANAN PESAWAT</h3>
<hr width="25%" align="center">


<?php
    include("configdb.php");
        /*
		$user="root";
		$pass="";
		$host="localhost";
		$database="transampera";
		
		$koneksi=mysql_connect("$host","$user","$pass")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		*/
		$query="select * from tb_bus,tb_destinasi,tb_tiket where tb_bus.ID_bus = 'tb_bus.".['ID_bus']."' and tb_destinasi.ID_pesanan='tb_destinasi.".['ID_pesanan']."' and tb_tiket.no_tiket='tb_tiket.".['no_tiket']."' ;";
		$hasil = mysql_query($query)or die(mysql_error());
		$data= mysql_fetch_array($hasil);
		


$nama=$data['Nama'];
$kode=$data['ID_bus'];
$jumlah=$data['Penumpang_dewasa']+$_POST['Penumpang_bayi'];
$Harga=$data['Harga'];

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
$jam=date("g:i:s a");

echo "<pre>";
echo "Nama Pemesan      : $Nama <br>" ;
echo "Kode Jurusan      : $kode <br>";
echo "Jurusan           : $jurusan <br>" ;
echo "Biaya Tiket		: $Harga <br>" ;
echo "Jumlah Pesan      : $jumlah <br>";
echo "<hr width=25% align=left>";
echo "Total Biaya       : $total <br>";
echo "<hr width=25% align=left>";
echo "Tanggal Pesan     : $tgl <br>";
echo "Jam Pesan         : $jam <br>";
echo "</pre>";
?>
</body>