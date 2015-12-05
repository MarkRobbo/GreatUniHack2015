<!DOCTYPE html>
<html>
  <head>
    <?php
       include('header.html');
       ?>
    <title>Raise Money</title>
  </head>

  <body>
    <?php
       include('navbar.html');
       ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="row page-header">Username</h1>
        </div>
      </div>

      <div class="row">
        <h5 class="col-md-6">
          Welcome! You can manage your game and charity settings
          here.
        </h5>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="game">Game</label>
            <input type="text" class="form-control"
                   id="game" placeholder="Game"></input>
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="charity">Charity (note that only text from the
              dropdown list is supported)
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

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap3-typeahead.min.js"></script>
    <script src="/js/typeaheadData.js"></script>

    <script type="text/javascript">
      window.onload = function () {
      var element = $('#game');
      var source = ["test", "this", "code", "something", "more"];

      connectTypeahead(element, source);
      };
    </script>
  </body>
</html>
