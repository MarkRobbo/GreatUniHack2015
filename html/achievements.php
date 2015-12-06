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
        <h1 class="row page-header">Achievements</h1>
      </div>

      <div class="row">
        <div class="col-md-12">
          <table id="table" class="table table-hover" data-toggle="table">
            <tr>
              <th>Game</th>
              <th>Achievement</th>
              <th>Charity</th>
              <th>Done?</th>
            </tr>
            <tr>
              <td>Osu!</td>
              <td>Beat rrtyui's score in "Image Material"</td>
              <td>That cancer thing</td>
              <td><a class="tick" href="javascript:void(0)"
                     title="Done">
                  <i class="glyphicon glyphicon-ok"></i>
              </a></td>
            </tr>
          </table>
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
