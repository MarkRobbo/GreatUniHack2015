<?php
  $atNewUserPage = true;
  include('/login/validateLogin.php');
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
  print_r($_SESSION);
  echo '</pre>';
      ?>
    </div>
  </body>

</html>
