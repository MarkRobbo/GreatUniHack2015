<?php
   include_once 'login/validateLogin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php
       include('header.html');
    ?>
    <title>Achievements</title>
  </head>

  <body>
    <?php
       include('navbar.html');
    ?>

    <div class="container">
      <div class="row">
        <h1 class="row page-header">Achievements</h1>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              All achievements that have been requested are listed
              here. If you complete one, tick it!
            </div>
            <table class="table table-hover">
              <tr>
                <th>Game</th>
                <th>Achievement</th>
                <th>Charity</th>
                <th>Done?</th>
              </tr>
            </table>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
