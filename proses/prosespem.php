<?php
include 'koneksi.php';
$info = $_GET['info'];
$id   = $_GET['id'];
if ($info == "upload") {
  $ekstensi_diperbolehkan	= array('png','jpg');
  $namag = $_FILES['file']['name'];
  $x = explode('.', $namag);
  $ekstensi = strtolower(end($x));
  $ukuran	= $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];
  $gambar = "bukti/".$namag;
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){
      move_uploaded_file($file_tmp, '../bukti/'.$namag);
      $sql = "UPDATE pembelian SET bukti='$namag',sts_pem='y',proses='Cek Bukti' WHERE no_hdpem='$id'";
    //  $sql = "UPDATE user SET confirm='1' WHERE username='$user'";
      $stmt= $pdo->prepare($sql);

      if ($stmt->execute()){

        echo "<script>alert('Data Berhasil Diupload $namag $id')</script>";
        echo "<meta http-equiv='refresh' content='1; URL=../profil.php'>";
      }else{
        echo "<script>alert('GAGAL MENGUPLOAD GAMBAR')</script>";
        echo "<meta http-equiv='refresh' content='1; URL=../profil.php'>";
      }
    }else{

      echo "<script>alert('UKURAN FILE TERLALU BESAR')</script>";
      echo "<meta http-equiv='refresh' content='1; URL=../profil.php'>";
    }
  }else{

    echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN')</script>";
    echo "<meta http-equiv='refresh' content='1; URL=../profil.php'>";

  }
}
 ?>
