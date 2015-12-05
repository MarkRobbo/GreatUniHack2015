<?php
   include_once 'login/validateLogin.php';
   if (isset($_SESSION['steamID']))
       header('Location: /');
?>
<!DOCTYPE html>
<html>
  <head>
    <?php
       include('header.html');
    ?>
    <title>Sign in</title>
  </head>

  <body>
    <?php
       include('navbar.html');
    ?>

    <div class="container main-container">
      <div class="col-md-12">
        <h2>Please sign in using steam first.</h2>
        <?php $body = true; include('login/signInButton.include.php');?>
      </div>
    </div>
  </body>

</html>
