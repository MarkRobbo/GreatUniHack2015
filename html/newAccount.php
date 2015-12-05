<?php
  $atNewUserPage = true;
  include_once 'login/validateLogin.php';
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
        <h2>Account Creation</h2>
        <p>Thank you for signing up for achieve4charity!</p>
        <p>To begin making or accepting challenges, please provide your email address:</p>
        <form action="newAccount.php" method="POST">
          Email:<br>
          <input type="email" name="email">
          <input type="submit" value="Submit">
        </form>
      </div>
      <?php
  echo '<pre>';
  if ($_SESSION['activated'] == false) { echo 'false'; } else { echo 'true'; }
  echo $_SESSION['email'];
  echo $_SESSION['steamID'];
  echo $_POST['email'];
  echo '</pre>';
      ?>
    </div>
  </body>

</html>
