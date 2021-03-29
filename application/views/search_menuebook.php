
<html lang="en">

<head>
    <style>
         .halaman
 {
 margin:30px;
 font-size:31px;
 }

.halaman a
 {

padding:3px;
 background:#990000;
 -moz-border-radius:15px;
 -webkit-border-radius:15px;
 border:1px solid #FFA500;
 font-size:20px;
 font-weight:bold;
 color:#FFF;
 text-decoration:none;
 }
        </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BelajarKuy</title>
    <link rel="icon" href="<?php echo base_url ('style/img/favicon.png');?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css');?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url('style/css/animate.css');?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url('style/css/owl.carousel.min.css');?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url('style/css/themify-icons.css');?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url('style/css/flaticon.css');?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url('style/css/magnific-popup.css');?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url('style/css/slick.css');?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('style/css/style.css');?>">
    <script src="<?php echo base_url("style/js/config.js"); ?>"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('style/img/logo.jpg');?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href='<?php echo base_url("belajar/index"); ?>'>Beranda</a>
                                </li>
            
                                <li class="nav-item">
                                    <a class="nav-link" href='<?php echo base_url("belajar/lihat");?>'>Ebook Perguruan Tinggi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href='<?php echo base_url("belajar/ebooktingkatsekolah");?>'>Ebook Tingkat SD/SMP/SMA Sederajat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href='<?php echo base_url("belajar/tentangkami");?>'>Tentang Kami</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    
    <!-- banner part start-->

    <!-- feature_part start-->
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ebook Yang Tersedia Di BelajarKuy</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form class="form-inline my-2 my-lg-0" action="<?php echo site_url('belajar/search_keyword');?>" method = "post">
		<input class="form-control mr-sm-2" type="text" name="keyword" placeholder="search">
		<input type="button" class="btn btn-primary" value="Cari">
	</form>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NAMA BUKU</th>
                    <th>JENIS BUKU</th>
                    <th>PENGARANG</th>
                    <th>PENERBIT</th>
                    <th>FILE BUKU</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php
                foreach ($results as $list)
                {
                    ?>
                  <tr>
                    
                    <td><?php echo $list->nama_buku;?></td>
                    <td><?php echo $list->jenis_buku;?></td>
                    <td><?php echo $list->pengarang;?></td>
                    <td><?php echo $list->penerbit;?></td>
                    <td><a href="<?php echo base_url().'file/'.$list->file_buku; ?>">DOWNLOAD</td>
                    
                  </tr>
                  <?php } ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
                    
    <!-- member_counter counter end -->

    <!--::review_part start::-->

    <!--::blog_part end::-->

    <!-- learning part start-->
    
    <!--::blog_part end::-->

    <!--::blog_part start::-->
    
    <!--::blog_part end::-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                            <p><span> Address :</span>Komp Bukit Nusa Indah, Ciputat,Tangerang Selatan </p>
                            <p><span> Phone :</span> 085692414524</p>
                            <p><span> Email : </span>TaufikMasrizal@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Social Media</h4>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script><i class="ti-heart" aria-hidden="true"></i> by <a href="https://https://www.instagram.com/taufikmasrizal/?hl=id.com" target="_blank">BelajarKuy</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?php echo base_url('style/js/jquery-1.12.1.min.js');?>"></script>
    <!-- popper js -->
    <script src="<?php echo base_url('style/js/popper.min.js');?>"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url('style/js/bootstrap.min.js');?>"></script>
    <!-- easing js -->
    <script src="<?php echo base_url('style/js/jquery.magnific-popup.js');?>"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url('style/js/swiper.min.js');?>"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url('style/js/masonry.pkgd.js');?>"></script>
    <!-- particles js -->
    <script src="<?php echo base_url('style/js/owl.carousel.min.js');?>"></script>
    <script src="<?php echo base_url('style/js/jquery.nice-select.min.js');?>"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url('style/js/slick.min.js');?>"></script>
    <script src="<?php echo base_url('style/js/jquery.counterup.min.js');?>"></script>
    <script src="<?php echo base_url('style/js/waypoints.min.js');?>"></script>
    <!-- custom js -->
    <script src="<?php echo base_url('style/js/custom.js');?>"></script>
</body>

</html>