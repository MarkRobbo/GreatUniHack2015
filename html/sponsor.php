<?php
   include_once 'login/validateLogin.php';
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
          <h1 class="row page-header">Make a Challenge</h1>
        </div>
      </div>

      <div class="row">
        <h5 class="col-md-6">
          Welcome! You can manage your sponsoring here. First, choose a player
          whom you'd like to challenge:
        </h5>
      </div>

      <div class="row">
        <div class="col-md-12">
          <form action="sponsor.php" method="POST" role="form" id="pledge">
            <div class="form-group">
              <label for="player">Player</label>
              <input type="text" class="form-control" name="player"
                     id="player" placeholder="Player" autocomplete="off">
              </input>
            </div>
        </div>
      </div>

      <div id="player_details" class="row hidden">
        <h5 class="col-md-12">
          Now choose the achievement you would like the player to complete to collect your bounty for charity:
        </h5>

        <div class="col-md-12">
          <div class="form-group">
            <label for="charity">Charity</label>
            <input type="text" id="charity"
                   class="form-control" placeholder="" disabled></input>
          </div>

          <div class="form-group">
            <label for="game">Game</label>
            <input type="text" class="form-control"
                   id="game" placeholder="Team Fortress 2" disabled></input>
          </div>

          <input type="hidden" value="440" name="appID" id="appID">

          <div class="form-group">
            <label for="achievement">Achievement</label>
            <input type="text" data-provide="typeahead" name="achievement"
                   autocomplete="off" id="achievement" maxlength="160"
                   class="form-control"
                   placeholder="The achievement"></input>
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
      var element;
      var source;

      $('#player').keypress(function (e) {
          if (e.which == 13) {
              e.preventDefault();
              $('#player_details').removeClass('hidden');
          }
      });

      element = $('#player');
      element.typeahead();

      connectTypeahead(element, "/login/getUserNames.php?typed=",
                       function (item) {
                           $('#charity').attr('placeholder', item.charity_name);
                           $.get("/login/getUserAchievements.php?user="
                                 + item.steamID +
                                 "&game=" + $('#appID').attr('value'),
                                 function (data) {
                                     var temp = [];

                                     data = JSON.parse(data);

                                     console.log(data);

                                     data.playerstats.achievements.forEach(
                                         function (e, i) {
                                             if (e.achieved === 0)
                                                 temp.push(e.name + ": "
                                                           + e.description);
                                         });

                                     console.log(temp);

                                     element = $('#achievement');
                                     element.typeahead();
                                     element.data('typeahead').source = temp;
                                 });
      });
    </script>

  </body>
</html>
