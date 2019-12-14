<?php
session_start();
if (isset($_SESSION['oturum'])) {
	$kuladi = $_SESSION['oturum']; ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="noindex,nofollow,nosnippet,noodp,noarchive,noimageindex">
		<meta name="author" content="Php Scriptlerim, www.phpscriptlerim.com" />
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

					<h1>Yetkinlikler</h1>
					<br><br>

					<table>
						<tr>
							<th style="text-align:center;">ID</th>
							<th>Yetkinlik</th>
                            <th style="text-align:center;">Yuzde</th>
                            <th style="text-align:center;">Renk Kodu</th>
                            <th style="text-align:center;">İşlemler</th>
						</tr>

						<?php include("../config.php");
							mysql_query("SET NAMES 'utf8'");
							mysql_query("SET CHARACTER SET utf8");
							mysql_query("SET COLLATION_CONNECTION = 'utf8_bin'");

							$sorgu = mysql_query("select * from yetkinlik order by id asc");
							if (mysql_num_rows($sorgu) == "0") {
								echo '<tr><td>Kayıt bulunamadı.</td><td></td><td></td></tr>';
							} 
							else 
							{
								while ($gelen = mysql_fetch_array($sorgu)) {
									$id = $gelen['id']; ?>
								<?php if ($id % 2 != 0) {
												echo '<tr>';
											} else {
												echo '<tr class="bg">';
											} ?>
								<td align="center" style="width:100px;"><?php echo $gelen['id']; ?></td>
                                <td style="width:1000px;"><?php echo $gelen['yetenek']; ?></td>
                                <td style="width:1000px;"><?php echo $gelen['yuzde']; ?></td>
                                <td style="width:1000px;"><?php echo $gelen['renkkodu']; ?></td>
								<td style="width:100px;" align="center"><a href="yetkinlikedit.php?id=<?php echo $gelen['id']; ?>"><img src="design/edit.png" alt="" title="Düzenle" /></a> &nbsp;&nbsp; <a href="plugin/yetkinlikdel.php?id=<?php echo $gelen['id']; ?>"><img src="design/cross.png" alt="" title="Sil" /></a></td>
								</tr>
						<?php }
							} ?>
					 
				</div>

			</div>
 

		</div>

	</body>

	</html>
<?php } else {
	echo '<script language="javascript">location.href="../404.php";</script>';
} ?>