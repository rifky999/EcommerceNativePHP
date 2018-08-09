<?php
include 'koneksi.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$id = $_POST['id'];
$sql = "UPDATE user SET username='$user',password='$pass',namaL='$nama',email='$email' WHERE username='$user'";
$stmt= $pdo->prepare($sql);

if ($stmt->execute()) {
  $admin = $pdo->prepare("SELECT * FROM user WHERE id_user='$id'");
  $admin->execute();
$row = $admin->fetch(PDO::FETCH_ASSOC);

    if(empty($row['username'])){
    echo "<script>alert('Error menampilkan data baru, silahkan logout.'); window.location = '../profil.php'</script>";

    }else {
      session_start();
    $username = $row['username'];
    $nama = $row['namaL'];
    $email = $row['email'];
    $pass = $row['password'];
    $id_usr = $row['id_user'];
    $_SESSION['username']    = $username;
    $_SESSION['nama'] = $nama;
    $_SESSION['pass'] = $pass;
    $_SESSION['email'] = $email;
    $_SESSION['id_usr'] = $id_usr;
    echo "<script>alert('Edit profil berhasil'); window.location = '../profil.php'</script>";
      }
}
else {
echo "<script>alert('Edit profil Gagal');</script>";
}
 ?>
