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

      <div id="" class="row hidden">
        <div class="col-md-12">
          <div class="form-group">
            <label for="game">Game</label>
            <input type="text" class="form-control"
                   id="game" placeholder="" disabled></input>
          </div>

          <div class="form-group">
            <label for="charity">Charity</label>
            <input type="text" data-provide="typeahead"
                   autocomplete="off" id="charity"
                   class="form-control" placeholder="Charity"></input>
          </div>
        </div>
      </div>

    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap3-typeahead.min.js"></script>
    <script src="/js/typeaheadData.js"></script>

    <script type="text/javascript">
        window.onload(function () {
            var element = $('#charity');
            var source = ["test", "this", "code", "something", "more"];

            connectTypeahead(element, source);
      });
    </script>

  </body>
</html>
