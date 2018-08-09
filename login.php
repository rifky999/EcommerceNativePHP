<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title></title>
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Anton|Roboto+Slab" rel="stylesheet">
  <script src="js/jquery-1.8.2.js">  </script>
  </head>
  <body class="bg" >

    <div class="row login">
      <div class="col-sm-4 col-sm-offset-4 boxlogin" style="font-family: 'Roboto Slab', serif;" >
        <div class="header" style="font-family: 'Anton', sans-serif;">

          LOGIN<br>
          <img src="img/shop.png" alt="">
        </div>
        <div class="body">
          <div class="form-group">
            <form method="POST" action="proses/proseslogin.php">
            <input type="text" name="user" placeholder="Username">

            <input type="password" name="pass" placeholder="Password"><br>
            <button type="submit" name="button" class="btn-info">LOGIN</button><br>
          </form>
                <button type="submit" name="button" class="btn-link registerB daftarC" >DAFTAR</button>
          </div>
        </div>
      </div>

    </div>
    <div class="row register">
      <div class="col-sm-4 col-sm-offset-4 boxlogin" style="font-family: 'Roboto Slab', serif;" >
        <div class="header" style="font-family: 'Anton', sans-serif;">

          REGISTRASI<br>

          <!--//7l0-r_-y52Ndm1qCNQeFXGFT-->
        </div>
        <div class="body">
          <div class="form-group">
          <form method="POST" action="proses/prosesdaftar.php">
            <input type="text" name="nama" placeholder="Nama Lengkap"><br>
            <input type="Email" name="email" placeholder="Email">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit" name="button" class="btn-success">DAFTAR</button><br>
          </form>
            <button type="submit" name="button" class="btn-link registerB loginC">LOGIN</button>
          </div>
        </div>
      </div>

    </div>
    <script>

        </script>

    </script>

    <script>
    $(document).ready(function(){

      $(".register").hide();

      $(".daftarC").click(function(){
        $(".login").hide(700);
        $(".register").show(800);
      });

      $(".loginC").click(function(){
        $(".register").hide(700);
        $(".login").show(800);
      });

    });
    </script>
    </body>
</html>
