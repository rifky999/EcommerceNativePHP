<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="google-signin-client_id" content="31250262277-lrr84jbt8gv5q7peg65idsfet74de3v8.apps.googleusercontent.com">
    <meta charset="utf-8">
    <title></title>
  </head>

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
    function signOut() {
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        console.log('User signed out.');
      });
    }
    signOut();
    </script>
  </html>

<?php
session_start();
session_destroy();

      echo "<script>alert('Logout berhasil'); window.location = 'login.php?logout=1'</script>";

 ?>
