<?php
   include_once 'login/validateLogin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php
       include('header.html');
    ?>
    <title><?php echo $_SESSION['name']; ?></title>
  </head>

  <body>
    <?php
       include('navbar.html');
    ?>

    <div class="container">
      <div class="row">
        <h1 class="row page-header">User: <?php echo $_SESSION['name']; ?></h1>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="btn-group btn-group-justified" role="group">
            <a href="?logout=1">
              <div class="btn btn-default">Logout</div>
            </a>
          </div>
          <br>

        <div class="col-md-12">
          <div class="form-group">
            <label for="charity">Change Your Preferred Charity:
            </label>
            <input type="text" class="form-control"
                   data-provide="typeahead" autocomplete="off"
                   id="charity" placeholder="Charity"></input>
          </div>
          <button type="submit" form="settings" class="btn btn-primary">
            Submit
          </button>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
