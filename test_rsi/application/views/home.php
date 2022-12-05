<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Data Employee</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- <link href="img/si-ulungIT-fix.png" rel="icon"> -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!--==========================
    menu
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
          <h1 style="position: center;">Test RSI</h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li class="menu-active"><a href="<?php echo base_url('');?>">Login</a></li>
            <li><a href="<?php echo site_url('input/100');?>">Input</a></li>
            <li><a href="<?php echo site_url('');?>">Fasilitas</a></li>
            <li><a href="<?php echo site_url('');?>">Report</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main">

  <div class="container">
        <div class="form">
        <hr>  
          <h2 style="position: center;">Login</h2>
          <hr>
          <?php echo $message;?>
          <div id="errormessage"></div>

          <form action="<?php echo site_url('login') ?>" method="post" role="form">
            <div class="form-group form-row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" name="username" id="username" placeholder="Username"/>
                  <div class="invalid-feedback">
                    <?php echo form_error('username') ?>
                  </div>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control  <?php echo form_error('password') ? 'is-invalid':'' ?>" name="password" id="password" placeholder="Nama Alias" />
                <div class="invalid-feedback">
                    <?php echo form_error('password') ?>
                  </div>
                </div>
            </div>
           
            <div class="text-center"><button type="submit" class="btn btn-outline-success">Login</button></div>
          </form>
        </div>

      </div> 
   
    </section><!-- #contact -->
  </main>

  
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
	#logoUlung{
		border-radius: 10%;
	}
  </style>
</body>
</html>
