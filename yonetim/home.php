<?php
session_start();
if (isset($_SESSION['oturum'])) {
	$kuladi = $_SESSION['oturum']; ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="noindex,nofollow,nosnippet,noodp,noarchive,noimageindex">
		<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
		<link rel="stylesheet" media="screen,projection" type="text/css" href="css/2col.css" title="2col" />
		<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="css/1col.css" title="1col" />
		<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]-->
		<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
		<link rel="stylesheet" media="screen,projection" type="text/css" href="css/mystyle.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/switcher.js"></script>
		<title>Yönetim Paneli</title>
	</head>

	<body>

		<div id="main">

			<div id="tray" class="box">

				<p class="f-left box">

					<span class="f-left" id="switcher">
						<a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="design/switcher-1col.gif" alt="1 Column" /></a>
						<a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="design/switcher-2col.gif" alt="2 Columns" /></a>
					</span>

					<strong>Yönetim Paneli</strong>

				</p>

				<p class="f-right"><strong><a href="admin.php"><?php echo $kuladi; ?></a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><a href="logout.php" id="logout">Çıkış</a></strong></p>

			</div>

			<hr class="noscreen" />

			<div id="menu" class="box">

				<ul class="box f-right">
					<li><a href="../index.php" target="_blank"><span><strong>Siteyi Görüntüle &raquo;</strong></span></a></li>
				</ul>

				<ul class="box">
					<li><a href="home.php"><span>Anasayfa</span></a></li>
					<li><a href="portproje.php"><span>Porfolyo Projeler</span></a></li>
					<li><a href="portkategori.php"><span>Kategoriler</span></a></li>
					<li><a href="yetkinlik.php"><span>Yetkinlikler</span></a></li>
					<li><a href="contact.php"><span>İletişim</span></a></li>
					<li><a href="admin.php"><span>Yönetici Bilgileri</span></a></li>
					<li><a href="ayarlar.php"><span>Ayarlar</span></a></li>
				</ul>

			</div>

			<hr class="noscreen" />

			<div id="cols" class="box">

				<div id="aside" class="box">

					<div class="padding box">

						<p id="logo"><a href="home.php"><img src="design/logo.png" title="Yönetim Paneli" alt="" /></a></p><br><br>

					</div>

					<div class="padding box">

						<p id="btn-create" class="box"><a href="portprojeekle.php"><span>Portyolyo Projesi Ekle</span></a></p>
						<p id="btn-create" class="box"><a href="portkatekle.php"><span>Kategori Ekle</span></a></p>
						<p id="btn-create" class="box"><a href="yetkinlikekle.php"><span>Yetkinlik Ekle</span></a></p>

					</div>

				</div>

				<hr class="noscreen" />

				<div id="content" class="box">

					<h1>Emlak Sitesi Yönetim Paneli</h1>
					<br><br>
					<div align="center">
						<table style="border:0 !important; text-align:center;">
							<tr>
								<td style="width:130px;"><a href="#"><img src="#" alt="" /><br>Anasayfa<br></a></td>
								<td style="width:130px;"><a href="#"><img src="#" alt="" /><br>Portfolyo Projeler<br></a></td>
								<td style="width:130px;"><a href="#"><img src="#" alt="" /><br>Kategori<br></a></td>
								<td style="width:130px;"><a href="#"><img src="#" alt="" /><br>Yetkinlikler<br></a></td>
								<td style="width:130px;"><a href="#"><img src="#" alt="" /><br>İletitişim<br></a></td>
								<td style="width:130px;"><a href="#"><img src="#" alt="" /><br>Admin<br></a></td>
								<td style="width:130px;"><a href="#"><img src="#" alt="" /><br>Ayarlar<br></a></td>
							</tr>
						</table>
					</div><br><br>

				</div>

			</div>

			<hr class="noscreen" />

			<div id="footer" class="box">

				<p class="f-left">&copy; <?php echo date("Y") ?> <a target="_blank" href="http://emreodabas.com/">Emre Odabaş</a></p>

			</div>

		</div>

	</body>

	</html>
<?php } else {
	echo '<script language="javascript">location.href="../404.php";</script>';
} ?>