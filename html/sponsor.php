<?php
   include('/login/validateLogin.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <?php
       include('header.html');
    ?>
    <title>Sponsor</title>
  </head>

  <body>
    <?php
       include('navbar.html');
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="row page-header">Username</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          Welcome! You can manage the players you sponsor here. Pick a
          charity to support, a player to sponsor and an achievement
          they should reach.
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="player">Player</label>
            <input type="text" class="form-control"
                   id="player" placeholder="Player"></input>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="game">Game</label>
            <input type="text" class="form-control"
                   id="game" placeholder="Something for now" disabled></input>
          </div>

          <div class="form-group">
            <label for="charity">Charity</label>
            <input type="text" data-provide="["nice","to","have","some","data"]"
                   autocomplete="off" id="charity" class="form-control"></input>
          </div>
        </div>
      </div>

    </div>

    <script src="bootstrap3-typeahead.min.js"></script>
  </body>
</html>
