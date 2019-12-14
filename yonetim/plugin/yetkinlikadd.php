<?php

if (isset($_POST["gonder"])) {

    $yetenek = $_POST['yetenek'];
    $yuzde = $_POST['yuzde'];
    $renkkodu = $_POST['renkkodu'];

    if ($yetenek == "" || $yuzde == "" || $renkkodu == "") {

        echo '<div class="error msg" style="width:300px;">
			<b>Bütün alanları doldurmanız gerekmektedir.</b>
				</div>';
    } else {

        mysql_query("SET NAMES 'utf8'");
        mysql_query("SET CHARACTER SET utf8");
        mysql_query("SET COLLATION_CONNECTION = 'utf8_bin'");

        $mysql = "insert into yetkinlik(yetenek,yuzde,renkkodu) values('$yetenek','$yuzde','$renkkodu')";

        $kayit = mysql_query($mysql) or trigger_error(mysql_error(), E_USER_ERROR);

        echo "	<div class='done msg' style='width:200px;'>
		<b>Kategori Eklendi!</b>
			</div>";
    }
}
