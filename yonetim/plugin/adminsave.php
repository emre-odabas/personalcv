<?php
if(isset($_POST['gonder'])){
$username = $_POST['username'];
$password = $_POST['password'];

$parola = md5($password);

if($username==""||$password==""){
	
		echo '<div class="error msg" style="width:300px;">
			<b>Bir hata oluştu. Lütfen yeniden deneyiniz.</b>
				</div>';
}else{

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_bin'");
$mysql="UPDATE administrator SET username='$username',password='$parola'";

$kayit = mysql_query($mysql) or trigger_error(mysql_error(),E_USER_ERROR);

echo '<div class="warning msg" style="width:700px;">
			<b>Şifre değişikliğinden sonra çıkış yapmanız gerekmektedir. Lütfen sağ üstten çıkış yapıp tekrar giriş yapınız!</b>
				</div>';	

 echo "<br><div class='done msg' style='width:200px;'>
		<b>Düzenleme Kaydedildi!</b>
			</div>";
		
} }
?>