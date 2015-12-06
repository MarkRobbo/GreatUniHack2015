<?php
  $atNewUserPage = true;
  include_once 'login/validateLogin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php
       include('header.html');
    ?>
    <title>Sign in</title>
  </head>

  <body>
    <?php
       include('navbar.html');
    ?>

    <div class="container main-container">
      <div class="col-md-12">
        <h2>Account Activation</h2>
        <p>Thank you for signing up for achieve4charity!</p>
        <p>To begin making or accepting challenges, please provide your email address:</p>
        <form action="newAccount.php" method="POST">
          Email:<br>
          <input type="email" name="email" class="form-control"
                 placeholder="E-Mail"></input>
          <input type="text" id="charity" data-provide="typeahead"
                 autocomplete="off" class="form-control"
                 placeholder="Charity goal"></input>
          <input class="hidden" id="charity_id" name="charity_ID">
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap3-typeahead.min.js"></script>
    <script src="/js/typeaheadData.js"></script>

    <script type="text/javascript">
      var element;
      var source;
      var temp;

      var hidden = $('#charity_id');
      var element = $('#charity');

      element.typeahead();

      connectTypeahead(element, "/login/getCharities.php?typed=",
                       function (item) {
                           hidden.val(item.charityId);
                       });
    </script>

  </body>

</html>
