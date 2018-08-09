<?php
include 'koneksi.php';
$Id = $_GET['id'];



$sql = "DELETE FROM barang WHERE br_id=$Id";

if ($pdo->exec($sql)) {
  echo "<script>alert('Delete Berhasil')</script>";
  header('Location: '.'../databarang.php');
} else {
  echo "<script>alert('Delete Gagal $Id')</script>";
  header('Location: '.'../databarang.php');
}
 ?>
