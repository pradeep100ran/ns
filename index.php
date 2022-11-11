<?php
echo("hello Neha");
$name = 
  $_GET['name'] ?: 'World';

?><!doctype html>
<html lang="en">
  <head>
    <title>Hello <?php echo $name ?>!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>

    <a href="https://github.com/MediaComem/php-hello-world-form">
      <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub">
    </a>

    <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Hello <?php echo $name ?>!</h1>

      <form class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 offset-sm-1 offset-md-2 offset-lg-3 offset-xl-4">
        <div class="form-group">
          <input type="text" class="form-control form-control-lg" placeholder="Enter your name" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </body>
</html>

