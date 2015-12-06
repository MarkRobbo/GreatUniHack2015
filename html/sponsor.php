<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
   include_once 'login/validateLogin.php';
   include_once 'login/db.class.php';

   $db = new DB();

   if ($_POST["amount"] > 1.99 && $_POST["amount"] < 100000.01)
    $db->addPledge($_SESSION["steamID"], $_POST["hidden_id"], $_POST["appID"],
                    $_POST["achievement"], $_POST["amount"]);
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

            <input type="hidden" name="hidden_id" id="hidden_id">
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
            <input type="text" class="form-control" name="game"
                   id="game" placeholder=""></input>
          </div>

          <input type="hidden" value="440" name="appID" id="appID">

          <div class="form-group">
            <label for="achievement">Achievement</label>
            <input type="text" data-provide="typeahead" name="achievement"
                   autocomplete="off" id="achievement" maxlength="160"
                   class="form-control"
                   placeholder="The achievement"></input>
          </div>

          <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" autocomplete="off" id="amount"
                   class="form-control" placeholder="Payment amount"></input>
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

<!--JSclearfix'-->
                           <!---->

    <script type="text/javascript">
    var element;
    var source;

    function initAchievements () {
        $.get("/login/getUserAchievements.php?user=" +
              $('#hidden_id').attr('value')) + '&game=' +
              $('#appID').attr('value'), function (data) {
                  console.log(data);
              });
    }


    $('#player').keypress(function (e) {
        if (e.which === 13) {
            e.preventDefault();
            $('#player_details').removeClass('hidden');
        }
    });

    element = $('#player');
    element.typeahead();
    connectTypeahead(element, "/login/getUserNames.php?typed=",
                     function (item) {
                         $('#charity').attr('placeholder', item.charity_name);
                         $('#hidden_id').attr('value', item.steamID);

                         initAchievements();

                         // $.get("/login/getUserAchievements.php?user="
                         //       + item.steamID +
                         //       "&game=" + $('#appID').attr('value'),
                         //       function (data) {
                         //           console.log($('#appID').attr('value'));
                         //           var temp = [];

                         //           data = JSON.parse(data);

                         //           console.log(data);

                         //           data.playerstats.achievements.forEach(
                         //               function (e, i) {
                         //                   if (e.achieved === 0)
                         //                       temp.push(e.name + ": "
                         //                                 + e.description);
                         //               });

                         //           console.log(temp);

                         //           element = $('#achievement');
                         //           element.typeahead();
                         //           element.data('typeahead').source = temp;
                         //       });
                     });

    </script>

  </body>
</html>
