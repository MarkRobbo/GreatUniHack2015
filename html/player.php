<!DOCTYPE html>
<html>
  <head>
    <?php
       include('header.html');
    ?>
    <title>Anything</title>
  </head>

  <body>
    <?php
       include('navbar.html');
    ?>
    <div class="container main-container">

      <div class="row">
        <div class="col-md-12">
          <h3>I am a</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="btn-group-vertical" role="group">
            <button type="button" class="btn btn-default">Steam ID</button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Game <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">A charity name</a></li>
							<li><a href="#">Another charity</a></li>
							<li role="separator" class="divider"></li>
						</ul>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Charity <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">A charity name</a></li>
							<li><a href="#">Another charity</a></li>
							<li role="separator" class="divider"></li>
						</ul>
          </div>
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Action <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
        </div>
      </div>

    </div>
  </body>

</html>
