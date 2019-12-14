<?php
if (isset($_POST['gonder'])) {

	$title = $_POST['title'];
	$favicon = $_POST['favicon'];
	$logo = $_POST['logo'];
	$keywords = $_POST['keywords'];
	$description = $_POST['description'];
	$unvan = $_POST['unvan'];
	$hakkimda = $_POST['hakkimda'];
	$resim = $_POST['resim'];
	$isim = $_POST['isim'];
	$email = $_POST['email'];
	$telefon = $_POST['telefon'];
	$social_facebook = $_POST['social_facebook'];
	$social_instagram = $_POST['social_instagram'];
	$social_linkedin = $_POST['social_linkedin'];
	$social_github = $_POST['social_github'];


	if ($title == "" || $favicon == "" || $logo == "" || $keywords == "" || $description == "" || $resim == "" || $unvan == "" || $hakkimda == "" || $isim == "" || $email == "" || $telefon == "" || $social_facebook == "" || $social_instagram == "" || $social_linkedin == "" || $social_github == "") {

		echo '<div class="error msg">
			<b>Alanları boş geçemezsiniz!</b>
				</div>';
	} else {

		mysql_query("SET NAMES 'utf8'");
		mysql_query("SET CHARACTER SET utf8");
		mysql_query("SET COLLATION_CONNECTION = 'utf8_bin'");
		$mysql = "UPDATE settings SET title='$title',favicon='$favicon',logo='$logo',keywords='$keywords',description='$description',resim='$resim',unvan='$unvan',hakkimda='$hakkimda',isim='$isim',email='$email',telefon='$telefon',social_facebook='$social_facebook',social_instagram='$social_instagram',social_linkedin='$social_linkedin',social_github='$social_github'";

		$kayit = mysql_query($mysql) or trigger_error(mysql_error(), E_USER_ERROR);

		echo "<br><div class='done msg' style='width:200px;'>
		<b>Düzenleme Kaydedildi!</b>
			</div>";
	}
}
