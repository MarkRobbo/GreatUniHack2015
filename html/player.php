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
        <div class="col-md-12">
          <div class="btn-group-vertical" role="group">
						
						<div class="form-group">
							<label for="charity">Game</label>
							<input type="text" data-provide="typeahead"
										 autocomplete="off" id="charity" class="form-control"></input>
						</div>
						
						<div class="form-group">
							<label for="charity">Charity</label>
							<input type="text" data-provide="typeahead"
										 autocomplete="off" id="charity" class="form-control"></input>
						</div>
          </div>
        </div>
      </div>

    </div>
    
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap3-typeahead.min.js"></script>
    <script src="/js/typeaheadData.js"></script>
  </body>
</html>
