<?php session_start();

if(isset($_SESSION['emlak'])){ $id = $_GET['id']; include("../../config.php"); 

$query  = mysql_query("delete from contact where id='$id'"); if ($query){ echo 'Silindi!'; }else{ echo 'Silinemedi Tekrar Deneyiniz...'; }

echo '<meta http-equiv="refresh" content="0;URL=../contact.php">'; 

}else{ echo '<script language="javascript">location.href="http://www.google.com.tr";</script>'; }	?>