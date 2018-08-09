<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>DistroIT | Distro Online telengkap dan terpercaya di cikarang</title>
	<meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
	<meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
	<meta name="author" content="Hakko Bio Richard"/>
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

	<!--start: Header -->
	<header>

		<!--start: Container -->
		<div class="container">

			<!--start: Row -->
			<div class="row">

				<!--start: Logo -->
				<div class="logo span3">

					<a class="brand" href="#"><img src="img/logo2.png" alt="Logo"></a>

				</div>
				<!--end: Logo -->

				<!--start: Navigation -->
				<div class="span9">

					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li><a href="index.php">Home</a></li>
			              			<li class="active"><a href="produk.php">Produk Kami</a></li>
									<li><a href="testimoni.php">Testimoni</a></li>
                                    <li><a href="detail.php">Keranjang</a></li>
                                    <li class="login"><a href="login.php">Login</a></li>
                                    <li class="dropdown loged">
          			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['nama']; ?> <b class="caret"></b></a>
          			                			<ul class="dropdown-menu">
          			                  				<li><a href="profil.php">Profil & Pembelian</a></li>
                                          <li><a href="logout.php">Logout</a></li>

          			                			</ul>
          			              			</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>

				</div>
				<!--end: Navigation -->

			</div>
			<!--end: Row -->

		</div>
		<!--end: Container-->

	</header>
	<!--end: Header-->

	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>Produk Kami</h2>

			</div>
			<!-- end: Container  -->

		</div>

	</div>
	<!-- end: Page Title -->

	<!--start: Wrapper-->
	<div id="wrapper">

		<!--start: Container -->
    	<div class="container">
        <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
      		<!-- start: Row -->

      		<div class="row">
	<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY br_id DESC");
	if(mysqli_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($data = mysqli_fetch_assoc($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['br_nm']; ?></h3></div>
                        <img width="70%"  style="height:220px" src="<?php echo $data['br_gbr']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['br_hrg'],2,",",".");?></h3></div>
					<!--	<p>

						</p> -->
						<div class="clear"><a href="detailproduk.php?hal=detailbarang&kd=<?php echo $data['br_id'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?hal=detailbarang&kd=<?php echo $data['br_id'];?>" class="btn btn-lg btn-success">Beli &raquo;</a></div>

                    </div>
        		</div>
                <?php
              }
              }

              ?>
<!---->
      		</div>
			<!-- end: Row -->


				</div>


				</div>

			</div>
			<!--end: Row-->

		</div>
		<!--end: Container-->

		<!--start: Container -->
    	<div class="container">

			<hr>

			<!-- start Clients List -->
			<div class="clients-carousel">

				<ul class="slides clients">
					<li><img src="img/logos/1.png" alt=""/></li>
					<li><img src="img/logos/2.png" alt=""/></li>
					<li><img src="img/logos/3.png" alt=""/></li>
					<li><img src="img/logos/4.png" alt=""/></li>
					<li><img src="img/logos/5.png" alt=""/></li>
					<li><img src="img/logos/6.png" alt=""/></li>
					<li><img src="img/logos/7.png" alt=""/></li>
					<li><img src="img/logos/8.png" alt=""/></li>
					<li><img src="img/logos/9.png" alt=""/></li>
					<li><img src="img/logos/10.png" alt=""/></li>
				</ul>

			</div>
			<!-- end Clients List -->

			<hr>

		</div>
		<!--end: Container-->

	</div>
	<!-- end: Wrapper  -->

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">

			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<a href="#"><img src="img/logo-footer-menu.png" alt="logo" /></a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">

					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="#">Kemeja</a></li>

							<li><a href="#">Kaos</a></li>

							<li><a href="#">Sweater</a></li>

							<li><a href="#">Jacket</a></li>

							<li><a href="#">Pants & Jeans</a></li>

						</ul>

					</div>

				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">

					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>

				</div>
				<!-- end: Footer Menu Back To Top -->

			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
  <div id="footer">

    <!-- start: Container -->
    <div class="container">

      <!-- start: Row -->
      <div class="row">

        <!-- start: About -->
        <div class="span3">

          <h3>Yentang Shop</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

        </div>
        <!-- end: About -->

        <!-- start: Photo Stream -->
        <div class="span3">

          <h3>Alamat Shop</h3>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
        <!-- end: Photo Stream -->

        <div class="span6">

          <!-- start: Follow Us -->
          <h3>Follow Us!</h3>
          <ul class="social-grid">
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-twitter">
                      <a href="http://twitter.com"></a>
                    </div>
                    <div class="social-info-back social-twitter-hover">
                      <a href="http://twitter.com"></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-facebook">
                      <a href="http://facebook.com"></a>
                    </div>
                    <div class="social-info-back social-facebook-hover">
                      <a href="http://facebook.com"></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-dribbble">
                      <a href="http://dribbble.com"></a>
                    </div>
                    <div class="social-info-back social-dribbble-hover">
                      <a href="http://dribbble.com"></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-flickr">
                      <a href="http://flickr.com"></a>
                    </div>
                    <div class="social-info-back social-flickr-hover">
                      <a href="http://flickr.com"></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!-- end: Follow Us -->


        </div>

      </div>
      <!-- end: Row -->

    </div>
    <!-- end: Container  -->

  </div>
  <!-- end: Footer -->

  <!-- start: Copyright -->
  <div id="copyright">

    <!-- start: Container -->
    <div class="container">

      <p>
        Copyright &copy; <a href="">Contoh.Shop</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BootstrapMaster
      </p>

    </div>
    <!-- end: Container  -->

  </div>
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

<?php


if (empty($_SESSION['akun'])) {
      echo " <script>
      $(document).ready(function(){

          $('.loged').hide();

      });
      </script>";
}
else {
    echo " <script>
    $(document).ready(function(){

        $('.login').hide();
        $('.loged').show();

    });
    </script>
    ";
}
 ?>

</body>
</html>
