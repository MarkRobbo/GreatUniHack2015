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

    <div class="container">
      <h1 class="row page-header">Account Activation</h1>
      <div class="row">
        <div class="col-md-12">
          <p>Thank you for signing up for achieve4charity!</p>
          <p>To begin making or accepting challenges, please provide your email address:</p>
          <form id="newAccount" role="form" action="newAccount.php" method="POST">
            <div class="form-group">
              <label for="email">E-Mail</label>
              <input type="email" name="email" class="form-control"
                     placeholder="E-Mail" id="email"></input>
            </div>

            <div class="form-group">
              <label for="charity">Charity</label>
              <input type="text" id="charity" data-provide="typeahead"
                     autocomplete="off" class="form-control" id="charity"
                     placeholder="Charity goal"></input>
            </div>
            <input class="hidden" id="charity_id" name="charity_ID">
            <button form="newAccount" type="submit" value="Submit"
                    class="btn btn-primary">Submit</button>
          </form>
        </div>
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
