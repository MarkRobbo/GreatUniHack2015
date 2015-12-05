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
        <div class="col-md-6">
          <h1 class="row page-header">Username</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="btn-group-vertical" role="group">
            Steam ID
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Game <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">A charity name</a></li>
							<li><a href="#">Another charity</a></li>
							<li role="separator" class="divider"></li>
						</ul>
						<div class="form-group">
							<label for="charity">Charity</label>
							<input type="text" data-provide="typeahead"
										 autocomplete="off" id="charity" class="form-control"></input>
						</div>
          </div>

        </div>
      </div>

    </div>
  </body>

</html>