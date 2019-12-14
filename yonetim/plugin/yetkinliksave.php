<?php
if(isset($_POST['gonder'])){
$yetenek = $_POST['yetenek'];
$yuzde = $_POST['yuzde'];
$renkkodu = $_POST['renkkodu'];
 
if($yetenek==""||$yuzde==""||$renkkodu==""){
	
		echo '<div class="error msg" style="width:300px;">
			<b>Bir hata oluştu. Lütfen yeniden deneyiniz.</b>
				</div>';
}else{

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_bin'");
$mysql="UPDATE yetkinlik SET yetenek='$yetenek',yuzde='$yuzde',renkkodu='$renkkodu' where id='$id' ";

$kayit = mysql_query($mysql) or trigger_error(mysql_error(),E_USER_ERROR);
 
 echo "<br><div class='done msg' style='width:200px;'>
		<b>Düzenleme Kaydedildi!</b>
			</div>";
		
} }
?>