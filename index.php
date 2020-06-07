<?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:login.php");
	  exit;
  }
?>

<!-- Show password protected content down here -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <title>Logged in</title>
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation" class="active"><a href="images.php">images</a></li>
          </ul>
        </nav>
      </div>

      <div class="jumbotron">
        <h1>Status: logged in</h1>
        <p><a class="btn btn-lg btn-success" href="logout.php" role="button">Log out</a></p>
      </div>

      
      </div>

      

    </div>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
