<?php
echo "<div style='color:white'>";
include "koneksi.php";
$Nama = $_POST['nama'];
$Email = $_POST['email'];
$Username = $_POST['username'];
$Password = $_POST['password'];

$name = $_GET['name'];
if (!empty($name)) {
  // code...
}
//  $sqzl = "INSERT INTO barang values ('','$nama','1','$harga','$stok','Pcs','$gambar','$ket','Y','$jenis')";

echo $Nama;
$sql = "INSERT INTO user values ('','$Username','$Password','$Nama','$Email','')";

if($pdo->exec($sql)){
  require 'PHPMailerAutoload.php';


  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
    //str sufl, str
      //Server settings
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com;';                     // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'rifkyyy999@gmail.com';                 // SMTP username
      $mail->Password = 'asdzxcqwe99';                                 // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('rifkyqw@gmail.com', 'AdminShop');
       // Add a recipient
      $mail->addAddress('rifkyqw@gmail.com');               // Name is optional
      $mail->addReplyTo('rifkyqw@gmail.com', 'Information');
    //  $mail->addCC('cc@example.com');
    //  $mail->addBCC('bcc@example.com');

      //Attachments
    //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Konfirmasi Pendaftaran';
      $mail->Body    = "
      <div style='
      border-style: solid;
      border-color: grey;
      padding: 10px 10px 10px 10px;
      width: 50%;
      '>
      <center>
      <h3>Konfirmasi</h3>
      Konfirmasi pendaftaran akun online shop : <a href='http://localhost/Tokol-master/proses/prosesconfr.php?username=$Username'>Konfirmasi</a>
      </center>
      </div>
      ";

      $mail->AltBody = 'allbody';

      $mail->send();
      echo 'Message has been sent';
      echo "<script>alert('Pendaftaran Berhasil, Harap Konfirmasi Email'); window.location = '../login.php'</script>";
  } catch (Exception $e) {
        echo "<script>alert('Error:  $mail->ErrorInfo'); window.location = '../login.php'</script>";
  }
}
echo "</div>";
