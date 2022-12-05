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
            <li><a href="<?php echo site_url('input');?>">Input</a></li>
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
          <h2 style="position: center;">Input</h2>
          <hr>
          <?php echo $message;?>
          <div id="errormessage"></div>

          <form action="<?php echo site_url('login') ?>" method="post" role="form">
            <div class="form-group form-row">
                <label for="username" class="col-sm-2 col-form-label">NO Rekam Medis</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" name="username" id="username" placeholder="Username"/>
                  <div class="invalid-feedback">
                    <?php echo form_error('username') ?>
                  </div>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="password" class="col-sm-2 col-form-label">Nik</label>
                <div class="col-sm-10">
                <input type="password" class="form-control  <?php echo form_error('password') ? 'is-invalid':'' ?>" name="password" id="password" placeholder="Nama Alias" />
                <div class="invalid-feedback">
                    <?php echo form_error('password') ?>
                  </div>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="password" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="password" class="form-control  <?php echo form_error('password') ? 'is-invalid':'' ?>" name="password" id="password" placeholder="Nama Alias" />
                <div class="invalid-feedback">
                    <?php echo form_error('password') ?>
                  </div>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tgl. Lahir</label>
                <div class="col-sm-10">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <input placeholder="Input Tanggal Lahir" type="text" class="form-control datepicker <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>" name="tgl_lahir" id="tgl_lahir"/>
                        <div class="invalid-feedback">
                          <?php echo form_error('tgl_lahir') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tgl. Periksa</label>
                <div class="col-sm-10">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <input placeholder="Input Tanggal Periksa" type="text" class="form-control datepicker <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>" name="tgl_lahir" id="tgl_lahir"/>
                        <div class="invalid-feedback">
                          <?php echo form_error('tgl_lahir') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label">Poliklinik</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>umum</option>
                        <option>IGD</option>
                        <option>Bedah Umum</option>
                        <option>Bedah Tulang</option>
                        <option>Syaraf</option>
                        <option>Mata</option>
                        <option>THT</option>
                        <option>rehab Medik</option>
                    </select>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label">Dokter</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>Dr Umar</option>
                        <option>Dr Usman</option>
                        <option>Dr Abdurahman</option>
                        <option>Dr Aisyah</option>
                    </select>
                </div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-outline-success">Save</button></div>
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
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap-datepicker.min.js');?>"></script>

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
   <script>
    $(function(){
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>
</body>
</html>
