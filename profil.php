<?php require_once("koneksi.php");
   if (!isset($_SESSION)) {
      session_start();
    }
    else {
      header('Location:'.'login.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Toko Online</title>
	<meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
	<meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
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
			              			            <li ><a href="index.php">Home</a></li>
			              			            <li><a href="produk.php">Produk Kami</a></li>
									                    <li><a href="testimoni.php">Testimoni</a></li>
                                      <li ><a href="detail.php">Keranjang</a></li>
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

				<h2><i class="ico-face ico-white"></i>Profil</h2>

			</div>
			<!-- end: Container  -->

		</div>

	</div>
	<!-- end: Page Title -->

	<!--start: Wrapper-->
	<div id="wrapper">
  <form action="proses/editprofil.php" method="post">

    <input type="hidden" name="id" value="<?php echo $_SESSION['id_usr']; ?>">
		<!-- start: Container -->
		<div class="container">
    <table class="table table-hover table-condensed">
      <tr>
        <td>Nama Lengkap</td><td>
          <div class="form-group">
            <div class="col-md-12">
              <input name="nama" class="form-control" value="<?php echo $_SESSION['nama']; ?>" type="text" required>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>Username</td><td>
          <div class="form-group">
            <div class="col-md-12">
              <input name="user" class="form-control" value="<?php echo $_SESSION['username']; ?>" type="text" required>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>Password</td><td>
          <div class="form-group">
            <div class="col-md-12">
              <input name="pass" class="form-control" value="<?php echo $_SESSION['pass']; ?>" type="password" required>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>Email</td><td>
          <div class="form-group">
            <div class="col-md-12">
              <input name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" type="email" required>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><button class="btn">Edit</button></td>
      <tr>
    </table>
  </form>
            <div class="title"><h3>Pembelian</h3></div>
<table class="table table-hover table-condensed">
        <tr>
          <th><center>No_Pem</center></th>
					<th><center>Tgl Pembelian</center></th>
          <th><center>Penerima</center></th>
					<th><center>Alamat</center></th>
					<th><center>Kode Post</center></th>
					<th><center>Kota</center></th>
					<th><center>Telphone</center></th>
					<th><center>Nama Rekening</center></th>
          <th><center>Status Pesanan</center></th>
          <th><center>Upload Bukti</center></th>
          <th><center>Delete</center></th>
				</tr>
        <?php
        $user = $_SESSION['username'];
        include 'proses/koneksi.php';
        $ambil=$pdo->prepare("select * from pembelian where usr_hdpem='$user'");
        $ambil->execute();
        while($row=$ambil->fetch()){

         ?>
        <tr>
          <td><center><?php echo $row[0]; ?></center></td>
			  <td><center><?php echo $row[1]; ?></center></td>
        <td><center><?php echo $row[4]; ?></center></td>
        <td><center><?php echo $row[5]; ?></center></td>
        <td><center><?php echo $row[6]; ?></center></td>
        <td><center><?php echo $row[7]; ?></center></td>
        <td><center><?php echo $row[8]; ?></center></td>
        <td><center><?php echo $row[10]; ?></center></td>
        <td><center><?php echo $row[15]; ?></center></td>
        <td><center>
          <form class="form-horizontal" method="post" action="proses/prosespem.php?info=upload&id=<?php echo $row[0];  ?>" enctype="multipart/form-data">
            <input type="file" name="file" >
          <button class="btn btn-info">Upload</button></form>
        </center></td>
        <td><center><a href="proses/prosespem.php?info=delete&id=<?php echo $row[0];  ?>"><button class="btn btn-danger">delete</button></a></center></center></td>

      </tr>
    <?php } ?>
</table>


			<!-- end: Table -->

		</div>
		<!-- end: Container -->

	</div>
	<!-- end: Wrapper  -->

    <!-- start: Footer Menu -->

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
