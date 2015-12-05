<!DOCTYPE html>
<html>
  <head>
    <?php
       include('head.html');
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

    <div class="container floating-container">
      <div class="row">
        <h3>I am a</h3>
        <div class="btn-group" role="group" aria-label="...">
          <button type="button" class="btn btn-default">Streamer</button>
          <button type="button" class="btn btn-default">Viewer</button>
        </div>
      </div>
    </div>
  </body>

</html>
