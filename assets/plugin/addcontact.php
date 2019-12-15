<?php

include("../../config.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['gonder'])) {

    $isim = $_POST['isim'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $mesaj = $_POST['mesaj'];
    $tarih = date('d.m.Y h:i:sa');
    $ip = $_SERVER['REMOTE_ADDR'];

    ///////////////// MAİL //////////////////////
    $mail = new PHPMailer();
    $mail->isSMTP();
    //$mail->SMTPDebug = 1;
    $mail->SMTPKeepAlive = true;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = ''; //tls, ssl
    $mail->Port = ; //25 , 465 , 587

    $mail->SetLanguage("tr", "phpmailer/language");
    $mail->CharSet  = "utf-8";
    $mail->Encoding = "base64";

    $mail->Host = "";
    $mail->Username = "";
    $mail->Password = "";

    $mail->setFrom("", ""); //GÖNDEREN
    $mail->addAddress("", ""); // GÖNDERİLEN

    $mail->isHTML(true);
    $mail->Subject = "Yeni İletişim Mesajı";
    $mail->Body = "<h1>Yeni İletişim Mesajı</h1> <br><p>Isim: " . $isim . "</p> <p>Email: " . $email . "</p> <p>Telefon: " . $tel . "</p> <p>Tarih: " . $tarih . "</p> <p>IP Adresi: " . $ip . "</p> <p>Mesaj: " . $mesaj . "</p>";

    ///////////////// INSERT DATABASE //////////////////////

    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET utf8");
    mysql_query("SET COLLATION_CONNECTION = 'utf8_bin'");
    $sorgu = mysql_query("INSERT INTO contact(isim,email,tel,mesaj,tarih,ip) VALUES('$isim','$email','$tel','$mesaj','$tarih','$ip')") or trigger_error(mysql_error(), E_USER_ERROR);

    if ($mail->send() && $sorgu) {

        //echo 'Yorum başarıyla alındı teşekkürler. <br><br>';
        header('Location: ../../index.php?durum=basarili');
    } else {

        //echo 'Yorum eklenirken bir sorun oluştu lütfen tekrar deneyin. <br> ';
        header('Location: ../../index.php?durum=basarisiz');
    }
}

///////////////////////////////////////////////////////
