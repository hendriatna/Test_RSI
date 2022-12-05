<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Si-UlungIT</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/si-ulungIT-fix.png');?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/animate/animate.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/magnific-popup/magnific-popup.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

</head>

<body id="body">
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:si-ulung.it@gmail.com">si-ulung.it@gmail.com</a>
        <i class="fa fa-phone"></i> +62 8579 36153 24
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>
  
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="<?php echo base_url('');?>"><img id="logoUlung" src="<?php echo base_url('assets/img/si-ulungIT-fix.png');?>" alt="" title=""/>-<span>Ulung</span>IT</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo base_url('');?>">Beranda</a></li>
          <li><a href="#">Programming</a>
      <ul>
              <li><a href="<?php echo site_url('programming_java_main');?>">Java</a></li>
              <li><a href="<?php echo base_url('programming_php_main');?>">PHP</a></li>
              <li><a href="#">Android</a></li>
              <li><a href="#">C</a></li>
        <li><a href="#">C++</a></li>
        <li><a href="#">JavaScript</a></li>
            </ul>
      </li>
          <li><a href="<?php echo base_url('berita_main');?>">Berita</a></li>
          <li><a href="#">Artikel</a></li>
      <li><a href="#">Alquran & Musik Religi</a></li>
      <li><a href="#">Video</a></li>
      <li><a href="#">Download</a></li>
          <li><a href="#">Tentang</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <aside class="sidebar" style="width: 17%;">
  <nav>
    <ul>
      <li id="menuSisi" class="active">Java Dasar</li>
      <li id="menuSisi"><a href="<?php echo base_url('pengenalan_java');?>">Pengenalan Java</li>
      <li id="menuSisi"><a href="#">IDE untuk Java</a></li>
      <li id="menuSisi"><a href="#">Sintak Umum Java</a></li>
      <li id="menuSisi"><a href="#">Array di Java</a></li>
      <li id="menuSisi"><a href="#">List di Java</a></li>
      <li id="menuSisi"><a href="#">ArrayList di Java</a></li>
      <li id="menuSisi"><a href="#">LinkedHashMap di Java</a></li>
      <br>
      <li id="menuSisi" class="active">Java Lanjutan</li>
      <li id="menuSisi"><a href="#">Mengenal MVC</a></li>
      <li id="menuSisi"><a href="#">Framework di Java</a></li>
      <li id="menuSisi"><a href="#">Belajar JSP</a></li>
      <li id="menuSisi"><a href="#">Framework Spring</a></li>
      <li id="menuSisi"><a href="#">Framework Hibernate</a></li>
      <li id="menuSisi"><a href="#">Koneksi Database</a></li>
      <li id="menuSisi"><a href="#">Membuat Crud Sederhana</a></li>
      <li id="menuSisi"><a href="#">Menyisipkan Template ke Java</a></li>
    </ul>
  </nav>
</aside>
  
<section class="main">
  <div class="main_template"></div>
  <?php 
    if($data == 'dashboard'){
      include("java_dashboard.php");
    }
  ?>
  
</section>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
   <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/easing/easing.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/superfish/hoverIntent.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/superfish/superfish.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/wow/wow.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/magnific-popup/magnific-popup.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/sticky/sticky.js');?>"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url('assets/contactform/contactform.js');?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>

  <style>
  .fa-television, .fa-newspaper-o, .fa-pencil-square-o, .fa-headphones, .fa-video-camera, .fa-cloud-download{
    background-color: gray;
    background: rgba(128, 128, 128, 0.5);
    color: white;
    padding: 10px;
    font-size: 1em;
    border-radius: 60%;
    opacity : 50%;
  }
  .fa-television:hover, .fa-newspaper-o:hover, .fa-pencil-square-o:hover, .fa-headphones:hover, .fa-video-camera:hover, .fa-cloud-download:hover{
    background-color: #50d8af;
  }
  #menuSisi:hover{
    background-color: #50d8af;
    color: black;  
  }
  #logoUlung{
    border-radius: 10%;
  }

  @import compass;

@import url(http://weloveiconfonts.com/api/?family=fontawesome);

[class*="fontawesome-"]:before
  font-family: 'fontawesome', sans-serif;
  
*, *:before, *:after
  box-sizing: border-box;

html, body{
  height: 100%;
}

h1{
  font-weight: normal;
  margin: 0;
  padding: 0 20px;
  line-height: 2;
  position: relative;
  transition: all .3s ease-out;
  }
.sidebar{
   transition: all .3s ease-out;
  overflow: scroll;
  -webkit-overflow-scrolling: touch;
  position: fixed;
  top: 85px;
  bottom: 0;
  /*height: 100%*/
  /*width: 350px;*/
  background-color: #f1f1f1!important;
  left: 0;
  z-index: 1;
  }
.main{
  position: absolute;
  left: 270px;
}
/*footer{
  position: absolute;
  left: 0;
  bottom: 20;
  width: 100%;
  text-align: center;
}*/
h2{
  margin: 0 0 1em 0;
}

h3{
  background-color: #555;
  color: #ccc;
  margin: 0;
  padding: 0 20px;
  font-weight: normal;
  line-height: 2;
  text-transform: uppercase;
  font-size: 90%;
  }
.toggle-menu{
  color: #ccc;
  text-decoration: none;
  font-size: 50px;
  float: left;
  display: block;
  position: absolute;
  left: 0;
  z-index: -1;
  opacity: 0;
  transition: opacity .3s ease-out;
  }

nav ul{
  list-style: none;
  padding: 0;
  margin: 0;
  /*background-color: #343a40;*/
  background-color: #f1f1f1!important;
  opacity: 50%;
  }
  li{
    padding: 5px;
    color: black;
    margin-bottom: 1px;
    border-left: 10px solid transparent;
    }
    a {
      color: black;
      }
.active{
  background-color: #8b8a81;
  color: white;
  }    
  </style>

  <script type="text/javascript">
    $(function(){
      $('.toggle-menu').click(function(e){
        e.preventDefault();
        $('.sidebar').toggleClass('toggled');
      });
    });
  </script>
</body>
</html>
