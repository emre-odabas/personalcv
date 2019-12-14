<?php

function temizle($url)
{
    $url = trim($url);
    $find = array('<b>', '</b>');
    $url = str_replace($find, '', $url);
    $url = preg_replace('/<(\/{0,1})img(.*?)(\/{0,1})\>/', 'image', $url);
    $find = array(' ', '&amp;quot;', '&amp;amp;', '&amp;', '\r\n', '\n', '/', '\\', '+', '<', '>');
    $url = str_replace($find, '-', $url);
    $find = array('.', '..', '...');
    $url = str_replace($find, '', $url);
    $find = array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ë', 'Ê');
    $url = str_replace($find, 'e', $url);
    $find = array('í', 'ý', 'ì', 'î', 'ï', 'I', 'Ý', 'Í', 'Ì', 'Î', 'Ï', 'İ', 'ı');
    $url = str_replace($find, 'i', $url);
    $find = array('ó', 'ö', 'Ö', 'ò', 'ô', 'Ó', 'Ò', 'Ô');
    $url = str_replace($find, 'o', $url);
    $find = array('á', 'ä', 'â', 'à', 'â', 'Ä', 'Â', 'Á', 'À', 'Â');
    $url = str_replace($find, 'a', $url);
    $find = array('ú', 'ü', 'Ü', 'ù', 'û', 'Ú', 'Ù', 'Û');
    $url = str_replace($find, 'u', $url);
    $find = array('ç', 'Ç');
    $url = str_replace($find, 'c', $url);
    $find = array('þ', 'Þ', 'ş', 'Ş');
    $url = str_replace($find, 's', $url);
    $find = array('ð', 'Ð', 'ğ', 'Ğ');
    $url = str_replace($find, 'g', $url);
    $find = array('/[^A-Za-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
    $repl = array('', '-', '');
    $url = preg_replace($find, $repl, $url);
    $url = str_replace('--', '-', $url);
    $url = strtolower($url);
    return $url;
}

if (isset($_POST["gonder"])) {

    $ad = $_POST['ad'];
    $resim = $_POST['resim'];
    $aciklama = $_POST['aciklama'];
    $link = $_POST['link'];

    $url = temizle($ad);

    if ($ad == "" || $resim == "" || $aciklama == "" ||  $link == "") {

        echo '<div class="error msg" style="width:300px;">
			<b>Bütün alanları doldurmanız gerekmektedir.</b>
				</div>';
    } else {

        mysql_query("SET NAMES 'utf8'");
        mysql_query("SET CHARACTER SET utf8");
        mysql_query("SET COLLATION_CONNECTION = 'utf8_bin'");

        $mysql = "insert into portproje(ad,aciklama,resim,link) values('$ad','$aciklama','$resim','$link')";
        $kayit = mysql_query($mysql) or trigger_error(mysql_error(), E_USER_ERROR);

        echo "	<div class='done msg' style='width:200px;'>
		<b>Ürün Eklendi!</b>
			</div>";
    }
}
