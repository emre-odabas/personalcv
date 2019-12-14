<?php include("config.php");

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_bin'");

$sorgu = mysql_query("select * from settings");
while ($gelen = mysql_fetch_array($sorgu)) {


  ?>

  <!DOCTYPE html>
  <html lang="zxx">

  <head>
    <meta charset="utf-8" />
    <meta name="description" content="<?php echo $gelen["description"]; ?>" />
    <meta name="keywords" content="<?php echo $gelen["keywords"]; ?>" />
    <meta name="author" content="<?php echo $gelen["isim"]; ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />


    <!-- Title -->
    <title><?php echo $gelen["title"]; ?></title>

    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="upload/resimler/<?php echo $gelen["favicon"]; ?>" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700,900" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon.css" rel="stylesheet" />
    <!-- Plugin CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/lightbox.min.css" rel="stylesheet" />
    <link href="assets/css/jquery.lineProgressbar.css" rel="stylesheet" />
    <!-- Stylesheets -->
    <link href="assets/css/carrer.css" rel="stylesheet" media="screen" />
    <link href="assets/css/carrer-responsive.css" rel="stylesheet" media="screen" />
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
  </head>

  <body oncontextmenu="return false">
    <!-- Page Loader Start Here -->
    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Loader End Here -->
    <div class="header-area" id="sticky">
      <nav class="navbar navbar-default">
        <div class="container-falude">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
              <img src="upload/resimler/<?php echo $gelen["logo"]; ?>" alt="Logo" />
            </a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" id="nav">
              <li class="current">
                <a href="#home">
                  <i class="flaticon-people-5"> </i> Anasayfa
                </a>
              </li>
              <li>
                <a href="#service"><i class="flaticon-user-1"></i> Hakkımda</a>
              </li>
              <li>
                <a href="#resume"><i class="flaticon-cv"></i> Yetkimliklerim
                </a>
              </li>
              <li>
                <a href="#portfolio"><i class="flaticon-library"></i> Portfolyo</a>
              </li>
              <li>
                <a href="#contact"><i class="flaticon-chat"></i> İletişim </a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>
    </div>
    <!-- header area end here -->
    <!-- banner area start here -->
    <div class="banner-area" id="home">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="bannder-content">

              <div class="profile-img">
                <a href="#"><img src="upload/resimler/<?php echo $gelen["resim"]; ?>" alt="profile" /></a>
              </div>
              <div class="profile-name">
                <h1><?php echo $gelen["isim"]; ?></h1>
                <p><?php echo $gelen["unvan"]; ?></p>
                <span><i>"Don't repeat yourself."</i></span>
              </div>

              <div class="social-media">
                <ul>
                  <li>
                    <a target="_blank" href="https://facebook.com/<?php echo $gelen["social_facebook"]; ?>"><i class="fa fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="https://instagram.com/<?php echo $gelen["social_instagram"]; ?>"><i class="fa fa-instagram"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="https://linkedin.com/in/<?php echo $gelen["social_linkedin"]; ?>"><i class="fa fa-linkedin-square"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="https://github.com/<?php echo $gelen["social_github"]; ?>"><i class="fa fa-github"></i></a>
                  </li>
                </ul>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- services area start here -->
    <div class="service-area" id="service">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="section-title wow bounceInUp " data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
              <h2><span></span>Hakkımda<span></span></h2>
              <p>Emre Odabaş Kimdir?</p>
            </div>
          </div>
        </div>
        <div class="row">

          <?php echo $gelen['hakkimda']; ?>

        <?php } ?>

        <hr />

        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">İlgilendiğim Alanlar</th>
              <th scope="col">Hobilerim</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                Yazılım
                <i>(Muhasebe Programları(ERP), Mobil Oyun ve Uygulamalar, Web
                  Siteleri, Masaüstü Uygulamaları)</i>
              </td>
              <td>Elektronik</td>
            </tr>

            <tr>
              <td>Donanım</td>
              <td>Arduino, Raspberry pi</td>
            </tr>
            <tr>
              <td>Web Tasarım</td>
              <td>Müzik</td>
            </tr>
            <tr>
              <td>3D Modelleme</td>
              <td>Bilgisayar Oyunları</td>
            </tr>
            <tr>
              <td>Photoshop</td>
              <td>Seyahat</td>
            </tr>
          </tbody>
        </table>

        <br /><br />

        <i>&nbsp;&nbsp;* Kısaca yenilikci, alanında uzmanlaşmak isteyen ve
          öğrenmeye hevesli bir yazılımcı.</i>
        </div>
      </div>
    </div>
    <!-- services area start here -->

    <!-- banner area end here -->
    <div class="resume-area" id="resume">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="section-title wow bounceInUp " data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
              <h2><span></span> Yetkinliklerim <span></span></h2>
              <p>Biyografi detaylarım</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="row">
              <div class="col-sm-12">
                <div class="single-resume">
                  <div class="resume-title">
                    <h3>
                      <i class="flaticon-user-with-computer-monitor-and-bar-graphs"></i>
                      Yetenek
                    </h3>
                  </div>

                  <div class="skills-list">

                    <?php
                    $sorgu = mysql_query("select * from yetkinlik order by id asc");

                    while ($gelen = mysql_fetch_array($sorgu)) {
                      $id = $gelen['id']; ?>

                      <div class="single-skills">
                        <h5><?php echo $gelen['yetenek']; ?></h5>
                        <div class="skillbar clearfix " data-percent="<?php echo $gelen['yuzde']; ?>">
                          <div class="skillbar-bar" style="background: <?php echo $gelen['renkkodu']; ?>;"></div>
                          <div class="skill-bar-percent"><?php echo $gelen['yuzde']; ?></div>
                        </div>
                      </div>

                    <?php } ?>



                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row">
              <div class="col-sm-12">
                <div class="single-resume">
                  <div class="resume-title ">
                    <h3><i class="flaticon-graduate-cap"></i> Eğitim</h3>
                  </div>
                  <div class="education-list">
                    <div class="single-education">
                      <div class="university-title">
                        <div class="name pull-left">
                          <h4>Süleyman Demirel Üniversitesi</h4>
                        </div>
                        <div class="year pull-right">
                          <h4>2016-2018</h4>
                        </div>
                      </div>

                      <div class="education-content">
                        <h5>Bilgisayar Programcılığı (3.48/4 ort)</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="single-resume">
                  <div class="resume-title">
                    <h3><i class="flaticon-people-5"></i> İş</h3>
                  </div>
                  <div class="employment-list">
                    <div class="single-employment">
                      <div class="university-title">
                        <div class="name pull-left">
                          <h4>Eskişehir Nefes Yazılım</h4>
                        </div>
                        <div class="year pull-right">
                          <h4>Ocak 2019-Temmuz 2019</h4>
                        </div>
                      </div>

                      <div class="employment-content">
                        <h5>Back/Front-End Erp Programlama</h5>
                      </div>
                    </div>
                    <div class="single-employment">
                      <div class="university-title ">
                        <div class="name pull-left">
                          <h4>Eskişehir Osmangazi Üniversitesi</h4>
                        </div>
                        <div class="year pull-right">
                          <h4>Temmuz 2018</h4>
                        </div>
                      </div>

                      <div class="employment-content">
                        <h5>
                          Bilgi İşlem Daire Başkanlığı Web Yazılım Grubu
                          Stajyerliği
                        </h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="single-resume">
                  <div class="resume-title">
                    <h3><i class="flaticon-medal-1"></i> Sertifikalar</h3>
                  </div>
                  <div class="certificates-list">
                    <div class="single-certificates">
                      <div class="university-title ">
                        <div class="name pull-left">
                          <h4>Süleyman Demirel Üniversitesi</h4>
                        </div>
                        <div class="year pull-right">
                          <h4>2019</h4>
                        </div>
                      </div>

                      <div class="certificates-content">
                        <p>Üstün Başarı Belgesi</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="single-resume">
                  <div class="resume-title">
                    <h3><i class="flaticon-translate five"></i>Yabancı Dil</h3>
                  </div>
                  <div class="languages-list">
                    <div class="single-language pull-left">
                      <div class="language-name">
                        <h4>İnglizce</h4>
                      </div>
                      <div class="language-rating">
                        <p>Okuduğunu Anlama: Orta - Konuşma: Kötü</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- portfolio area start here -->
    <div class="portfolio-area " id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="section-title wow bounceInUp " data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
              <h2><span></span>Portfolyo<span></span></h2>
              <p>Son Çalışmalarım</p>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-sm-12">
            <div class="grid fix" id="da-thumbs">


              <?php
              $sorgu = mysql_query("select * from portproje order by id asc");

              while ($gelen = mysql_fetch_array($sorgu)) {
                $id = $gelen['id']; ?>


                <div class="grid-item animation design print illustration">
                  <div class="single-portfolio">
                    <div class="work_thumb">
                      <img src="upload/resimler/<?php echo $gelen['resim']; ?>" alt="project1" class="img-responsive" /> <!-- assets/images/portfolio/1.png -->
                    </div>
                    <div class="work-hover">
                      <div class="mask-work text-center">
                        <h4><?php echo $gelen['ad']; ?></h4>
                        <p>
                          <?php echo $gelen['aciklama']; ?>
                        </p>
                        <a target="_blank" href="<?php echo $gelen['link']; ?>">Projeye Git</a>
                      </div>
                    </div>
                  </div>
                </div>

              <?php } ?>

            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- portfolio area end here -->

    <!-- contact area start here -->
    <div class="contact-area" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="section-title wow bounceInUp " data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
              <h2><span></span>İletişim<span></span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="contact-left">
              <!-- Contact Page Map Area Start-->
              <div class="google-map-area map-area">
                <div id="gmap" class="gmap-area" style="height: 450px; position: relative; overflow: hidden;"></div>
              </div>
              <!-- Contact Page Map Area End-->

              <?php
              $sorgu = mysql_query("select * from settings");
              while ($gelen = mysql_fetch_array($sorgu)) {
                ?>

                <div class="Profile-info">
                  <ul>
                    <li>
                      <i class="flaticon-user-shape"></i><span>İsim :</span> <?php echo $gelen['isim']; ?>
                    </li>
                    <li>
                      <i class="flaticon-daily-calendar-page-on-day-23"></i><span>Yaş :</span> <?php $age = date("Y") - 1997;
                                                                                                  echo $age;  ?>
                    </li>
                    <li>
                      <i class="flaticon-envelope"></i><span>Email: </span> <?php echo $gelen['email']; ?>
                    </li>
                  </ul>
                </div>

              <?php } ?>

            </div>
          </div>
          <div class="col-sm-6">
            <div class="contact-form">
              <h3>İrtibatta Kalalım</h3>




              <?php
              if (isset($_POST['gonder'])) {

                $isim = $_POST['isim'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $mesaj = $_POST['mesaj'];
                $tarih = date('d.m.Y h:i:sa');
                $ip = $_SERVER['REMOTE_ADDR'];

                if ($isim == "" || $email == "" || $tel == "" || $mesaj == "") {

                  echo '<font color="red"><b>Lütfen tüm alanları doldurun!</b></font><br><br>';
                } else {

                  /*if (!eregi("^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,4}$", $email)) {

                    echo '<font color="red"><b>Lütfen geçerli bir e-mail adresi girin!</b></font><br><br>';
                  } else {

                    $girilen_kod  = trim(strip_tags($_POST['security']));
                    $guvenlik_kodu  = trim(strip_tags($_SESSION['koruma']));

                    if ($girilen_kod != $guvenlik_kodu) {
                      echo '<font color="red"><b>Güvenlik kodunu eksik yada yanlış girdiniz. Lütfen tekrar deneyin!</b></font><br><br>';
                    } else {*/
  
                    $kayit = mysql_query("insert into contact(isim,email,tel,mesaj,tarih,ip) values('$isim','$email','$tel','$mesaj','$tarih','$ip')") or trigger_error(mysql_error(), E_USER_ERROR);

                    echo '<font color="green"><b>Mesajınız gönderildi. Kısa bir süre içinde sizinle iletişime geçeceğiz.</b></font><br><br>';
                    //}
                  }
                }
              
              ?>




              <form method="post">
                <div class="input-grup">
                  <input type="text" placeholder="İsim" id="isim" name="isim" />
                  <input type="email" placeholder="Email " id="email" name="email" />
                  <input type="text" placeholder="Telefon" id="tel" name="tel" />
                </div>

                <div class="messages-area">
                  <textarea name="mesaj" id="mesaj" cols="30" rows="10" placeholder="Mesaj"></textarea>
                </div>
                <div class="submit-btn text-right">
                  <input class="btn " type="submit" class="input-submit" name="gonder" value="Gönder" />
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact area end here -->
    <!-- footer start here -->
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="copyright">
              <p>
                © <?php echo date("Y") ?> Bütün Hakları Saklıdır |
                <a href="http://www.emreodabas.com" target="_blank">Emre Odabaş</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript -->
    <!-- jQuery Library -->
    <script src="assets/js/jquery-1.12.0.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- jQuery Plugins -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scrollup.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcvAXp35fi4q7HXm7vcG9JMtzQbMzjRe8"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/googlemap.js"></script>
    <script src="assets/js/jquery.lineProgressbar.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/skillbar.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/custom-script.js"></script>
  </body>

  </html>