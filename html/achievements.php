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
    <link rel="stylesheet" href="/css/bootstrap-table.min.css"></link>
  </head>

  <body>
    <?php
       include('navbar.html');
    ?>

    <div class="container">
      <div class="row">
        <h1 class="row page-header">Challenges You Have Made</h1>
      </div>

      <div class="row">
        <div class="col-md-12">
          <table id="table" data-toggle="table">
            <thead>
              <tr>
                <th>Game</th>
                <th>Achievement</th>
                <th>Challenged</th>
                <th>Bounty</th>
                <th>Done?</th>
                <th>Paid?</th>
              </tr>
            </thead>
            <tbody>
<?php
  include_once 'login/db.class.php';
  include_once 'login/SteamAPI.class.php';
  include_once 'login/JustGivingAPI.class.php';

  $db = new DB();
  $steamAPI = new SteamAPI();
  $JGAPI = new JustGivingAPI();

  foreach ($db->getChallengesMadeBy($_SESSION['steamID']) as $row)
  {
    echo '<tr>';
    echo '<td>' . $steamAPI->getGameName($row['appID']) . '</td>';
    echo '<td>' . $row['Achievement'] . '</td>';
    $toUser = $db->getUserDetails($row['toUser']);
    echo '<td>' . $toUser['name'] . '</td>';
    echo '<td>' . $row['amount'] . '</td>';
    if ($row['completed'] == 1)
    {
      echo '<td><a class="tick" href="javascript:void(0)"
                         title="Yes">
                      <i class="glyphicon glyphicon-ok"></i>
                  </a></td>';
    } else {
      echo '<td><a class="cross" href="javascript:void(0)"
                         title="No">
                      <i class="glyphicon glyphicon-remove"></i>
                  </a></td>';
    }
    if ($row['paid'] == 1)
    {
      echo '<td><a class="tick" href="javascript:void(0)"
                         title="Yes">
                      <i class="glyphicon glyphicon-ok"></i>
                  </a></td>';
    } else {
      if ($row['completed'] == 0)
        echo '<td>Not Needed Yet</td>';
      else
        echo '<td><a href="' . $JGAPI->getDonationLink($toUser['charity_ID'], $row['amount'], $row['pledgeID']) . '">Donate Now!</a></td>';
    }
    echo '</tr>';
  }
?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <h1 class="row page-header">Challenges Given to You</h1>
      </div>

      <div class="row">
        <div class="col-md-12">
          <table id="table" data-toggle="table">
            <thead>
              <tr>
                <th>Game</th>
                <th>Achievement</th>
                <th>Challenged By</th>
                <th>Bounty</th>
                <th>Done?</th>
                <th>Paid?</th>
              </tr>
            </thead>
            <tbody>
<?php
  foreach ($db->getChallengesFor($_SESSION['steamID']) as $row)
  {
    echo '<tr>';
    echo '<td>' . $steamAPI->getGameName($row['appID']) . '</td>';
    echo '<td>' . $row['Achievement'] . '</td>';
    $fromUser = $db->getUserDetails($row['fromUser']);
    echo '<td>' . $fromUser['name'] . '</td>';
    echo '<td>' . $row['amount'] . '</td>';
    if ($row['completed'] == 1)
    {
      echo '<td><a class="tick" href="javascript:void(0)"
                         title="Yes">
                      <i class="glyphicon glyphicon-ok"></i>
                  </a></td>';
    } else {
      echo '<td><a class="cross" href="javascript:void(0)"
                         title="No">
                      <i class="glyphicon glyphicon-remove"></i>
                  </a></td>';
    }
    if ($row['paid'] == 1)
    {
      echo '<td><a class="tick" href="javascript:void(0)"
                         title="Yes">
                      <i class="glyphicon glyphicon-ok"></i>
                  </a></td>';
    } else {
      echo '<td><a class="cross" href="javascript:void(0)"
                         title="No">
                      <i class="glyphicon glyphicon-remove"></i>
                  </a></td>';
    }
    echo '</tr>';
  }
?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap3-typeahead.min.js"></script>
    <script src="/js/typeaheadData.js"></script>
    <script src="/js/bootstrap-table.min.js"></script>
  </body>
</html>
