<!DOCTYPE html>
<head>
<title>pemesanan</title>
</head>
<body>
<style type="text/css">
table,tr,td{
    border-collapse: collapse;
padding: 0px;
}
a:link, a:visited {
display: block;
    font-weight: bold;
color: #ffffff;
    background-color: #F4511E;
width: 320px;
    text-align: center;
padding: 20px;
    text-decoration: none;
}
p.outset {
    border-style: outset;
    border-color: #BF360C;
width: 360px;
padding: 20px;
}
a:hover, a:active {
    background-color: #BF360C;
}
</style>
<table border="0" width="100%">
    <tr>
        <td width="200">
            <img src="../image/palak.png">
        </td>
        <td align="center" colspan="2">
            <font size="6" face="Cooper black" color="Red"><i>Kamu Pesan, Kami Jemput, Kito Berangkat...</i></font>
        </td>
    </tr>
</table>
<table border="0" width="100%" align="center">
    <tr bgcolor="#F4511E">
        <td align="center" height="100%" width="400">
            <a href="../html/transampera.html">Halaman utama</a>
        </td>
        <td align="center" height="100%" width="400">
            <a href="pesantiket.php">Pemesanan tiket</a>
        </td>
        <td align="center" height="100%" width="400">
            <a href="../html/kontakkami.html">Kontak kami</a>
        </td>
    </tr>
</table>

<br>
<table align="center" border=1 heigh ="600" width="1000">
    <tr>
        <td>
            <?php
                if(!isset($_GET['page'])){
                    include('pendaftaran-carijadwal.html');
                }
                else{
                    $page = $_GET['page'].".html";
                    include($page);
                }
            ?>
        </td>
    </tr>
</table>
<br><br><br><br>
<br>
<table border ="0" width="100%">
    <tr bgcolor="#455A64" width="1345" align="center">
        <td colspan="5" align="center"><img src="../image/bayar.png"></td>
    </tr>
</table>
</body>
</html>