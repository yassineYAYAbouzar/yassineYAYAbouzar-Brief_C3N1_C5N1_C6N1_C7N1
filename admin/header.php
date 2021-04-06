<?php

session_start();
if( $_SESSION["ussername"]->Role === "admin"){

}else {
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    <link rel="stylesheet" href="sass/style.css">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
      <li><a class="nav-link" href="Home.php"><i class="fa fa-home"></i> Home</a></li>
      <li><a class="nav-link" href="Formation.php"><i class="fa fa-info-circle"></i>Formation</a></li>
      <li><a class="nav-link" href="devlopper.php"><i class="fa fa-code"></i> devlopper</a></li>
      <li><a class="nav-link" href="niveuxhaut.php"><i class="fa fa-line-chart"></i> Haut Niveau</a></li>
      <li><a class="nav-link" href="Niveuxbas.php"><i class="fa fa-level-down"></i> bas Niveau  </a></li>
      <li><a class="nav-link" href="Formation.php"><i class="fa fa-code"></i>formations</a></li>
    </ul>
  </div>
  <form action="" method="post"><button class="btn btn-danger" type="submit" name="out"><i class="fa fa-sign-out " >sign-out</i></button></form>
</nav>
<div class="margin-top">
<?php

if(isset($_POST['out'])){
  session_unset();
  session_destroy();
  header('location: ../index.php');
}
?>