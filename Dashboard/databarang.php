<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Data Barang</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Nama Barang</th>
								<th>Harga Barang</th>
								<th>Stok Barang</th>
								<th>Jenis</th>
								<th>Ketergangan</th>
                <th>Option</th>
							</tr>
						</thead>
						<tbody>
              <?php
                include 'proses/koneksi.php';
                $ambil=$pdo->prepare("select * from barang");
                $ambil->execute();
                while($row=$ambil->fetch()){
                  $id = $row['br_id'];
               ?>
							<tr class="odd gradeX">
								<td><?php echo $row['br_nm']; ?></td>
								<td><?php echo $row['br_hrg']; ?></td>
								<td><?php echo $row['br_stok']; ?></td>
								<td class="center"> <?php echo $row['jenis']; ?></td>
								<td class="center"><?php echo $row['ket']; ?></td>
                <td class="center">
                  <a href="proses/delete.php?id=<?php echo $id; ?>"><button class="btn-danger">Hapus</button></a>
                  <a href="editbrg.php?id=<?php echo $id; ?>"><button class="btn-info">Edit</button></a>
                </td>
							</tr>
<?php } ?>


							</tr>
						</tbody>
					</table>
  				</div>
  			</div>



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

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>
