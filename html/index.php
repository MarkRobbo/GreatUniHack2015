<?php
  include_once 'login/validateLogin.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
       include('header.html');
    ?>
    <title>AchieveForGood | Sponsor others to complete game achievements</title>

  </head>
  <body>
    <div class="navbar-wrapper">
      <?php
         include('navbar.html');
      ?>
    </div>

    <!-- 1 slide carousel so far
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/slider.jpg" alt="Achievements">
          <div class="container">
            <div class="carousel-caption">
              <h1>Complete Achievements For Charity</h1>
              <p>Challenge your friends and favourite streamers to complete Steam achievements for a cash bounty</p>
              <p><?php $body = true; include 'login/signInButton.include.php'; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Marketing messaging and featurettes
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Challenge</h2>
          <p>Pose a challenge to a friend or streamer to beat an achievement and place a bounty on its completion. You can place as many bounties as you want, at amounts of your choosing depending on what you think the difficulty of the achievement warrants</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Play</h2>
          <p>Complete challenges given to you by others to secure the reward (or multiple rewards) for charity. We will check you have actually completed the achievement through Steam's API</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Everyone Wins!</h2>
          <p>The player gets to win donations for a well deserved charity of their choice and the challenger knows you definitely deserve it!</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 AchieveForGood &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
