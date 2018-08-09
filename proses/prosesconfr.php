<?php
include 'koneksi.php';
$user = $_GET['username'];
$sql = "UPDATE user SET confirm='1' WHERE username='$user'";
$stmt= $pdo->prepare($sql);

if ($stmt->execute()) {
echo "<script>alert('Konfirmasi Email Berhasil'); window.location = '../login.php'</script>";
}
else {
echo "<script>alert('Konfirmasi Email Gagal');</script>";
}
 ?>
