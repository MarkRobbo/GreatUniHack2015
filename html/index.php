<!DOCTYPE html>
<html>
  <head>
    <?php
       include('header.html');
    ?>
    <title>Anything</title>
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed"
                  data-toggle="collapse" data-target="#navbar"
                  aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="/">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="/test">Test!</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container main-container">

      <div class="row">
        <div class="col-md-12">
          <h3>I am a</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">Streamer</button>
            <button type="button" class="btn btn-default">Viewer</button>
          </div>
        </div>
      </div>

    </div>
  </body>

</html>
