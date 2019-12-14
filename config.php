<?php
$dbhost = "localhost";
$dbuser = "root"; //Veritabanı Kullanıcı Adı
$dbpass = ""; //Veritabanı Şifresi
$dbdata = "db_emreodabas"; //Veritabanı Adı

if (!@mysql_connect($dbhost, $dbuser, $dbpass)) {
  die("Veritabanına bağlanılamadı...<br>HATA: ".mysql_error());
}

if (!@mysql_select_db($dbdata)) {
  die("Veritabanı seçilemedi<br>HATA: ".mysql_error());
}
?>