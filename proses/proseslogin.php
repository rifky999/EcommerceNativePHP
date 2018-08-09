<div style="color:white">
<?php
include "koneksi.php";
$username = $_POST['user'];
$password = $_POST['pass'];



$admin = $pdo->prepare('SELECT * FROM user WHERE username = :username and password = :passcode');
$admin->execute(array(
                  ':username' => $username,
                  ':passcode' => $password
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);

if(empty($row['username'])){
echo "<script>alert('Username dan Password tidak valid $username,$password.'); window.location = '../login.php'</script>";
echo "Your Login Name or Password is invalid";

}else {
$username = $row['username'];
$nama = $row['namaL'];
$email = $row['email'];
$pass = $row['password'];
$id_usr = $row['id_user'];
$confrm = $row['confirm'];
if ($confrm == 1) {
  session_start();
  $_SESSION['username']    = $username;
  $_SESSION['nama'] = $nama;
  $_SESSION['pass'] = $pass;
  $_SESSION['email'] = $email;
  $_SESSION['id_usr'] = $id_usr;
  $_SESSION['akun'] = 1;
  echo "<script>alert('Login berhasil, Selamat datang $username'); window.location = '../index.php'</script>";
}
else {
  echo "<script>alert('Harap konfirmasi email terlebih dahulu'); window.location = '../login.php'</script>";
}



}


    //$_SESSION['password']    = $password;





?>
</div>
