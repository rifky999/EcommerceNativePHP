<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$jenis = $_POST['jenis'];
$ket = $_POST['ket'];



if($nama){
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
          $sql = "INSERT INTO barang values ('','$nama','1','$harga','$stok','Pcs','$gambar','$ket','Y','$jenis')";

					if($pdo->exec($sql)){

						echo "<script>alert('Data Berhasil Diupload')</script>";
            echo "<meta http-equiv='refresh' content='1; URL=../tambahbarang.php'>";
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



 ?>
