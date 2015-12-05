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
        <h5 class="col-md-6">
          Welcome! You can manage your sponsoring here. First,
          pick a player to sponsor (all input boxes have dropdown lists).
        </h5>
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

      <div id="player_details" class="row hidden">
        <h5 class="col-md-12">
          Now, specify exactly what your player should achieve to
          receive your donation. The game and charity are chosen by
          the player, but you can review them here.
        </h5>

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
                   class="form-control" placeholder="Charity" disabled></input>
          </div>

          <div class="form-group">
            <label for="achievement">Achievement</label>
            <input type="text" data-provide="typeahead"
                   autocomplete="off" id="achievement" maxlength="160"
                   class="form-control"
                   placeholder="Something you want your player to achieve in a video game."></input>
          </div>
          <button type="submit" form="pledge" class="btn btn-primary">
            Pledge
          </button>
        </div>
      </div>

    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap3-typeahead.min.js"></script>
    <script src="/js/typeaheadData.js"></script>

    <script type="text/javascript">
        window.onload = function () {
            var element;
            var source;

            $('#player').keypress(function (e) {
                if (e.which == 13)
                    $('#player_details').removeClass('hidden');
            });

            element = $('#player');
            source = ["stuff", "that", "should", "be", "player", "names"];

            connectTypeahead(element, source);

            element = $('#charity');
            source = ["test", "this", "code", "some", "more"];

            connectTypeahead(element, source);
      };
    </script>

  </body>
</html>
