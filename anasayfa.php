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
<title>Başlıksız Belge</title>
</head>

<body>
	<h1>Hosgeldin</h1><?php
$_SESSION["kullanici"]=$liste["kad"];
	/*
     ******YORUM SATIRI****
kullanıcı girisi basarılı olunca ekrana hosgelgin ve o kullanıcının adını yazıyor .
*/
?>
</body>
</html>