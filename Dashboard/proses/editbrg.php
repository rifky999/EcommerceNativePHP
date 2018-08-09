<?php
include 'koneksi.php';
$Id=$_GET['id'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$jenis = $_POST['jenis'];
$ket = $_POST['ket'];

$namag = $_FILES['file']['name'];

if($namag){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$namag = $_FILES['file']['name'];
			$x = explode('.', $namag);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
      $gambar = "gambar/".$namag;
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){
					move_uploaded_file($file_tmp, '../../gambar/'.$namag);
          $sql = "UPDATE barang SET br_nm='$nama', br_hrg='$harga', br_stok='$stok',br_gbr='$gambar',ket='$ket',jenis='$jenis' WHERE br_id=$Id";
          $stmt = $pdo->prepare($sql);

					if($stmt->execute()){
						
            echo "<script>alert('Edit Data Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='1; URL=../databarang.php'>";
					}else{

            echo "<script>alert('GAGAL MENGUPLOAD GAMBAR')</script>";
            echo "<meta http-equiv='refresh' content='1; URL=../databarang.php'>";
					}
				}else{

          echo "<script>alert('UKURAN FILE TERLALU BESAR')</script>";
          echo "<meta http-equiv='refresh' content='1; URL=../databarang.php'>";
				}
			}else{

        echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN')</script>";
        echo "<meta http-equiv='refresh' content='1; URL=../databarang.php'>";
			}
		}
else {
  $sql = "UPDATE barang SET br_nm='$nama', br_hrg='$harga', br_stok='$stok',ket='$ket',jenis='$jenis' WHERE br_id=$Id";
  $stmt = $pdo->prepare($sql);

  if ($stmt->execute()) {
    echo "<script>alert('Edit Data Berhasil')</script>";
    echo "<meta http-equiv='refresh' content='1; URL=../databarang.php'>";
  }
  else {
    echo "<script>alert('Edit Data Gagal')</script>";
    echo "<meta http-equiv='refresh' content='1; URL=../databarang.php'>";
  }
}


 ?>
