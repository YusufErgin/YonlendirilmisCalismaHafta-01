<?php
include("baglanti");
/*
     ******YORUM SATIRI****
baglantı php de ki veri tabanı baglantısını baslatıyor.
*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Üye Ol</title>
</head>

<body>
	<p>Üye ol </p>
							<form name="form1" method="post" action="">
							  <table width="290" height="233" border="5">
							    <tr>
							      <td width="91">Ad :</td>
							      <td width="174"><label for="ad"></label>
						          <input type="text" name="ad" id="ad"></td>
						        </tr>
							    <tr>
							      <td height="44">Soyad :</td>
							      <td><label for="soyad"></label>
						          <input type="text" name="soyad" id="soyad"></td>
						        </tr>
							    <tr>
							      <td>Kullanıcı Adı :
							        <label for="kad"></label></td>
							      <td><input type="text" name="kad" id="kad"></td>
						        </tr>
							    <tr>
							      <td>Sifre : 
							        <label for="sifre"></label></td>
							      <td><input type="password" name="sifre" id="sifre"></td>
						        </tr>
							    <tr>
							      <td>Sifre Tekrar : 
							        <label for="sifretekrar"></label></td>
							      <td><input type="password" name="sifretekrar" id="sifretekrar"></td>
						        </tr>
							    <tr>
							      <td colspan="2" align="center"><input type="submit" name="uye" id="uye" value="Üye Ol"></td>
						        </tr>
						      </table>
						  </form>
                          <?php
	
	/*
	kullanıcı uye olmak için formda bulunan bilgileri giriyor 
	ardından kullanıcının girdigi bilgiler tam girilirse 
	uye tablosuna kullanıcı ekliyor .
	ardından giriş sayfasına yönlendiriliyor. 
	*/
	      if(isset($_POST["uye"])){
			  extract($_POST);
			  
			if(empty($ad) || empty($soyad)|| empty($kad) || empty($sifre) || empty($sifretekrar)){
				echo "Lütfen Boş Alan Bırakmayın";
				}else{if($sifre==$sifretekrar){
				  $sifrees=1;
				  $sorgu=mysql_query("insert into uye(ad,soyad,kad,sifre) values ('$ad','$soyad','$kad','$sifre')");
				  if($sorgu==1){
				   echo "Üye Kayıt Başarılı";
				   $_SESSION["kullanici"]=$sorgu["kad"];
				   header("location:giris.php");
		}
				 
				  
				 
				  }
				  else{echo "Şifreler Eşleşmiyor";}
				  
				  }
			  
			  
			  }
	  ?>
	
</body>
</html>