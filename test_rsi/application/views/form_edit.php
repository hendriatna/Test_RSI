<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Data Karyawan</title>
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
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap-datepicker.min.css');?>" rel="stylesheet">

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
          <h1>Simply Crud</h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li class="menu-active"><a href="<?php echo base_url('');?>">Home</a></li>
            <li><a href="<?php echo base_url('employees');?>">Data Karyawan</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main">
      
        
      <div class="container">
        <div class="form">
        <hr>  
          <h2>Edit Data Karyawan</h2>
          <hr>
          <div id="errormessage"></div>

          <form action="<?php echo site_url('edit_employee') ?>" method="post" role="form">
            <input type="hidden" name="id" value="<?php echo $employee->id;?>"/>
            <div class="form-group form-row">
                <label for="nama" class="col-sm-2 col-form-label">Nama*</label>
                <div class="col-sm-10">
                  <input type="text" value="<?php echo $employee->nama;?>" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" name="nama" id="nama" placeholder="Nama"/>
                  <div class="invalid-feedback">
                    <?php echo form_error('nama') ?>
                  </div>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="nama_alias" class="col-sm-2 col-form-label">Nama Alias</label>
                <div class="col-sm-10">
                <input type="text" value="<?php echo $employee->nama_alias;?>" class="form-control  <?php echo form_error('nama_alias') ? 'is-invalid':'' ?>" name="nama_alias" id="nama_alias" placeholder="Nama Alias" />
                <div class="invalid-feedback">
                    <?php echo form_error('nama_alias') ?>
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
                        <input placeholder="Input Tanggal Lahir" value="<?php echo $employee->tgl_lahir;?>" type="text" class="form-control datepicker <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>" name="tgl_lahir" id="tgl_lahir"/>
                        <div class="invalid-feedback">
                          <?php echo form_error('tgl_lahir') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="inputNamaAlias" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                <?php if ($employee->jenis_kelamin=="L"){?>
                    <div class="form-check">
                        <input class="form-check-input" value="L" type="radio" name="jenis_kelamin" id="flexRadioDefault2" checked/>
                        <label class="form-check-label" for="flexRadioDefault2"> Laki-laki </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="P" type="radio" name="jenis_kelamin" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1"> Perempuan </label>
                    </div>
                <?php }else{?>
                    <div class="form-check">
                        <input class="form-check-input" value="L" type="radio" name="jenis_kelamin" id="flexRadioDefault2" />
                        <label class="form-check-label" for="flexRadioDefault2"> Laki-laki </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="P" type="radio" name="jenis_kelamin" id="flexRadioDefault1" checked/>
                        <label class="form-check-label" for="flexRadioDefault1"> Perempuan </label>
                    </div>
                <?php }?>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <textarea value="<?php echo $employee->alamat;?>" type="text" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" name="alamat" id="alamat" placeholder="Alamat" ><?php echo $employee->alamat;?></textarea>
                  <div class="invalid-feedback">
                    <?php echo form_error('alamat') ?>
                  </div>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" value="<?php echo $employee->email;?>" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" name="email" id="email" placeholder="Email"/>
                  <div class="invalid-feedback">
                      <?php echo form_error('email') ?>
                  </div>
                </div>  
            </div>
            <div class="form-group form-row">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                  <input type="text" value="<?php echo $employee->telepon;?>" class="form-control <?php echo form_error('telepon') ? 'is-invalid':'' ?>" name="telepon" id="telepon" placeholder="Telepon"/>
                  <div class="invalid-feedback">
                    <?php echo form_error('telepon') ?>
                  </div>
                </div>
            </div>
            
            <div class="text-center"><button type="submit" class="btn btn-outline-success">Update</button></div>
          </form>
        </div>

      </div> 
   
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Hendriatna</strong>. Simply Employee Data
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js');?>"></script>
  <!-- JavaScript Libraries -->
  
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
