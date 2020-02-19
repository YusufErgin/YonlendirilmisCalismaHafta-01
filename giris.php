<?php
session_start();
include("baglanti");
/*
     ******YORUM SATIRI****
baglantı php de ki veri tabanı baglantısını baslatıyor.
*/
?>
<html>
<head>
<meta charset="utf-8">
<title>Giriş Yap</title>
</head>

<body>
		<p>Giriş Yap </p>
	                        
	
	                         <!-- kullanıcı için form olusturuyoruz  -->
							<form name="form1" method="post" action="">
							  <table width="294" height="132" border="5">
							    <tr>
							      <td width="91" height="37">Kullanıcı Adı :
							        <label for="kad"></label></td>
							      <td width="174"><input type="text" name="kad" id="kad"></td>
						        </tr>
							    <tr>
							      <td height="40">Sifre : 
							        <label for="sifre"></label></td>
							      <td><input type="password" name="sifre" id="sifre"></td>
						        </tr>
							    <tr>
							      <td colspan="2" align="center"><input type="submit" name="giris" id="giris" value="Giriş Yap"></td>
						        </tr>
						      </table>
						  </form>
                          
      
                    


                    
					<?php
	/*
	kullanıcı adını ve şifresini girip giris butonuna bastıktan sonra uye tablosunda bulunan uye bilgilerini kontrol ettiriyo eger girilen 
	bilgiler uye tablosunda varsa kullanıcının giriş yapmasına izin veriyor ve anasayfaya yonlendırıyor. 
	kullanıcı girişi hatalı olursa ekrana hatalı giriş yazıyor .
	*/
	if (isset($_POST['giris']))
{
extract($_POST);
$sorgu=mysql_query("select * from uye where kad='$kad' and sifre='$sifre'");
if(mysql_num_rows($sorgu)>0)
{
	$liste=mysql_fetch_array($sorgu);
echo"<script> alert ('Siteye Hoşgeldiniz') && header('location:anasayfa.php')</script>"; 
$_SESSION["kullanici"]=$liste["kad"];
	}
	else{echo "<script> alert('Hatali giriş')</script>";}

}
	?>

</body>
</html>