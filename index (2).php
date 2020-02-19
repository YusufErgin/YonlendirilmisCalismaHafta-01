<?php
ob_start();
session_start();
include ("baglanti.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<h1 align="center">Admin Girişi</h1>
  <table border="0" align="center" cellspacing="10" cellpadding="10">
                <tr>
                    <td>Kullanıcı adı:</td>
                    <td colspan="2"><label>
                            <input name="kad" type="text" class="metinkutusu" id="kad" />
                  </label></td>
                </tr>
                <tr>
                    <td>Şifre:</td>
                    <td colspan="2"><input name="sifre" type="password" class="metinkutusu" id="sifre" /></td>
                </tr>
                <tr>
                    <td height="23">&nbsp;</td>
                    <td>
                        <label>
                            <input type="submit" name="btGiris" id="btGiris" value="Giriş" />
                        </label>
                    </td>
                    <td></td>
                </tr>
            </table>
</form>
<?php
//ADMİN GİRİŞ KONTROLÜ BURADA YAPILMAKTADIR. DOĞRU YAPILDIYSA giriS.php sayfasına yönlendirmektedir
if (isset($_POST['btGiris']))
{
	extract($_POST);
$sorgu=mysql_query("select * from admin where adminadi='$kad' and sifre='$sifre'");
if(mysql_num_rows($sorgu)==1){
	$listele=mysql_fetch_array($sorgu);
	$_SESSION["admin"]=$listele["adminadi"];
	header("Location:giris.php");
	
	}

}

?>
</body>
</html>