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
            <li><a href="<?php echo site_url('employees');?>">Data Karyawan</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main">
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">

    <div class="container">

            <div class="tittle-head">
                <h3 class="tittle">Data Karyawan</h3>
            </div>
            <div class="table-responsive">
                <a href="<?php echo site_url('tambah');?>" class="btn btn-outline-success" role="button">Tambah</a>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nama Alias</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th class="text-center">aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $count = 0;
                            foreach ($employee as $row) {
                                $count++;
                        ?> 
                            <tr>
                                <td><?php echo $count;?></td>
                                <td><?php echo $row->nama;?></td>
                                <td><?php echo $row->nama_alias;?></td>
                                <td><?php echo $row->tgl_lahir;?></td>
                                <td><?php if ($row->jenis_kelamin == 'L') {echo 'Laki-Laki';} else {echo 'Perempuan';};?></td>
                                <td><?php echo $row->alamat;?></td>
                                <td><?php echo $row->email;?></td>
                                <td><?php echo $row->telepon;?></td>
                                <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="<?php echo site_url('update/'.$row->id);?>" class="btn btn-outline-warning" type="button">Update</a>
                                    <!-- <a href="<?php echo site_url('delete/'.$row->id);?>" class="btn btn-outline-danger" type="button">Delete</a> -->
                                    <a onclick="deleteConfirm('<?php echo site_url('delete/'.$row->id);?>')" href="#!" class="btn btn-outline-danger" type="button">Delete</a>
                                  </div>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
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
  <script>
function deleteConfirm(url){
  let text = "Anda yakin akan menghapus data ini?";
  if (confirm(text) == true) {
    window.location = url;
  }
}
</script>
</body>
</html>
