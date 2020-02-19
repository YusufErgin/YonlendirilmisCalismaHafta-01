<?php
ob_start();
session_start();
include ("baglanti");
/*
     ******YORUM SATIRI****
baglantı php ile baglantıyı saglıyor .
*/

if(empty($_SESSION["admin"]))
{
    header("Location:index.php");
/*
     ******YORUM SATIRI****
sifresiz admin girisini önlüyor .
*/
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
</head>

<body>
	<table width="483" height="28" border="10" align="center">
    <tr>
      <td align="center">Tüm Kullanıcıları Listele</td>
      <td align="center"><input type="submit" name="klistele" id="klistele" value="Kullanıcı Listele" /></td>
    </tr>
  </table>
  <p>
    <?php
	  /*
     ******YORUM SATIRI****
 admin uye olan kullanıcıları veri tabanından tabloya dokuyor .
 istedigi kullanıcıyı silebiliyor.
*/

if(isset($_POST["klistele"]))
{ 
$taban="select * from uye";
$sonuc=mysql_query($taban);

echo "<table border='10' align='center'>";
			echo "<tr>";
			echo "<th>İşlem </th>";
			echo "<th> Ad </th>";
			echo "<th> Soyad </th>";
			echo "<th>KullanıcıAdı </th>";
			echo "<th> Şifresi </th>";
			echo "</tr>";
		
		while ($listele=mysql_fetch_array($sonuc))
		{
			echo "<tr>";
				echo '<td> '."<a href='giris.php?islem2=sil&id=".$listele ["id"]."'>Sil</a>".'</td>';
				echo '<td> '.$listele ["ad"] .'</td>';
				echo '<td> '.$listele ["soyad"] .'</td>';	
			    echo '<td> '.$listele ["kad"] .'</td>';
				echo '<td> '.$listele ["sifre"] .'</td>';		
				echo "</tr>";
		}
			echo "</table>";
	
}
?>
</body>
</html>