<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->


    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">




    <link href="css/forms.css" rel="stylesheet">


  </head>
  <body>
    <div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Dashboard Toko Online</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
        <div class="col-md-2">
  		  	<div class="sidebar content-box" style="display: block;">
                  <ul class="nav">
                      <!-- Main menu -->
                      <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                      <li><a href="datapesan.php"><i class="glyphicon glyphicon-list"></i> Data Pesanan</a></li>
                      <li><a href="databarang.php"><i class="glyphicon glyphicon-list-alt"></i> Data Barang</a></li>
                      <li><a href="tambahbarang.php"><i class="glyphicon glyphicon-plus"></i> Tambah Barang</a></li>
                      <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>

                  </ul>
               </div>
  		  </div>
		  <div class="col-md-10">

	  			<div class="row">
					<div class="col-md-12">
						<div class="content-box-large" style="text-align: left">
			  				<div class="panel-heading">
								<div class="panel-title">Tambah Barang</div>
							</div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" method="post" action="proses/prosesbarang.php" enctype="multipart/form-data">

									<fieldset>

										<div class="form-group" >
											<label class="col-md-2 control-label" for="text-field">Nama Barang</label>
											<div class="col-md-6">
												<input name="nama" class="form-control" placeholder="........" type="text" required >
											</div>
										</div>
                    <div class="form-group ">
                      <label class="col-md-2 control-label" for="text-field">Jenis Barang</label>
                      <div class="col-md-2">
                      <select name="jenis" id="inputState" class="form-control">
                        <option selected>Pilih Jenis</option>
                        <option>Baju</option>
                        <option>Jaket</option>
                        <option>Sepatu</option>
                        <option>Celana</option>
                      </select>
                    </div>
                    </div>
                    <div class="form-group">
											<label class="col-md-2 control-label" for="text-field">Harga Barang</label>
											<div class="col-md-6">
												<input name="harga" class="form-control" placeholder="........" type="text" required >
											</div>
										</div>
                    <div class="form-group">
											<label class="col-md-2 control-label" for="text-field">Stok Barang</label>
											<div class="col-md-6">
												<input name="stok" class="form-control" placeholder="........." type="text" required>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 control-label" for="textarea">Keterangan</label>
											<div class="col-md-6">
												<textarea name="ket" class="form-control" placeholder="........" rows="4" required></textarea>
											</div>
										</div>
                  </fieldset>



									<fieldset>
										<div class="form-group">
											<label class="col-md-2 control-label">Input Gambar</label>
											<div class="col-md-6">
												<input type="file" name="file" >

											</div>
										</div>

									</fieldset>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-2 col-md-offset-6">
												<button class="btn btn-default" type="reset">
													Reset
												</button>
												<button class="btn btn-primary" type="submit">
													<i class="fa fa-save"></i>
													Submit
												</button>
											</div>
										</div>
									</div>

								</form>


			  				</div>
			  			</div>
					</div>


				</div>




	  		<!--  Page content -->
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>

         </div>
      </footer>


    <script src="bootstrap/js/bootstrap.min.js"></script>



    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>
