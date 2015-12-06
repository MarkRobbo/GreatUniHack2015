<?php
   include_once 'login/validateLogin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php
       include('header.html');
    ?>
    <title>Username</title>
  </head>

  <body>
    <?php
       include('navbar.html');
    ?>

    <div class="container">
      <div class="row">
        <h1 class="row page-header">Username</h1>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="btn-group btn-group-justified" role="group">
            <a href="sponsor.php">
              <div class="btn btn-default">Donate</div>
            </a>
            <a href="player.php">
              <div class="btn btn-default">Manage game and charity settings</div>
            </a>
            <a href="achievements.php">
              <div class="btn btn-default">Manage achievements</div>
            </a>
            <a href="?logout=1">
              <div class="btn btn-default">Logout</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
