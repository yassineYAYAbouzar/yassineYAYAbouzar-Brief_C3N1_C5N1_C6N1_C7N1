<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 
    <link rel="stylesheet" href="admin/sass/style.css">
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
      <li><a class="nav-link" href="userPage.php"><i class="fa fa-home"></i> Home</a></li>
    </ul>
  </div>
  <form action="" method="post"><button class="btn btn-danger" type="submit" name="out"><i class="fa fa-sign-out " >sign-out</i></button></form>
</nav>
<div class="margin-top">
<div class="card m-auto text-center " style="width: 18rem;">
<?php
include "admin/conect.php";
session_start();

if(isset($_SESSION['ussername'])){
  $id =  $_SESSION["ussername"]->id ;
  if( $_SESSION["ussername"]->Role === "user"){
  echo '
      <h3>' .  $_SESSION["ussername"]->FulName . '</h3>
      <hr>
      <img src="'. $_SESSION["ussername"]->Image .'" class="card-img-top m-auto w-75 h-75 m-3" alt="...">
      <div class="mt-3">
      <button class="btn btn-success col-lg-5 mb-3" id="technos" >technos</button>

        <button class="btn btn-info col-lg-5 mb-3" id="Formation">Formation</button>        
  ';}else {
    header('location: ../login.php');
}
}else{
    header('location: ../login.php');
}

?>

<form action="" method="post"  id="form1" class="d-none">
            <h5 class="mt-3">Saisir Votre compétence</h5>
            <hr>
            <input type="number" min="0" max="100" step="25" name="html" placeholder="html" />
            <input type="number" min="0" max="100" step="25" name="css" placeholder="css"/>
            <input type="number" min="0" max="100" step="25" name="ajax" placeholder="ajax"/>
            <input type="number" min="0" max="100" step="25" name="js" placeholder="js"/>
            <input type="number" min="0" max="100" step="25" name="php" placeholder="php"/>
            <input type="number" min="0" max="100" step="25" name="mysql" placeholder="sql"/>
            <button type="submit" class="btn btn-primary btn-block mt-3" name= "techno">send</button>
        </form>
        <form action="" method="get"  id="form2" class="d-none">
            <h5 class="mt-3">demande Formation</h5>
            <hr>
            <input type="text" name="techno" placeholder="techno" class="btn-block btn-outline-info"/>
            <input type="date"  name="dateD" class="btn-block btn-outline-success" />
            <button type="submit" class="btn btn-primary btn-block mt-3" name= "Formation">send</button>
        </form>
      </div>
</div>
<?php
if(isset($_GET['Formation'])){
  $dateD =  filter_var($_GET['dateD'],FILTER_SANITIZE_STRING);
  $techno =  filter_var($_GET['techno'],FILTER_SANITIZE_STRING);
  $stmt2 = $con->prepare("INSERT INTO `formations` (`ID`, `techno`, `date`) VALUES ('$id ', '$techno', '$dateD')"); 
  if ($stmt2->execute()) {
  header('location: userPage.php');
  }else { 
    echo '<div class="alert alert-success alert-danger fade show" role="alert">Error<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>';  }
}
if(isset($_POST['techno'])){
  $html =  filter_var($_POST['html'],FILTER_SANITIZE_NUMBER_INT);
  $css =  filter_var($_POST['css'],FILTER_SANITIZE_NUMBER_INT);
  $ajax =  filter_var($_POST['ajax'],FILTER_SANITIZE_NUMBER_INT);
  $js =  filter_var($_POST['js'],FILTER_SANITIZE_NUMBER_INT);
  $php =  filter_var($_POST['php'],FILTER_SANITIZE_NUMBER_INT);
  $mysql =  filter_var($_POST['mysql'],FILTER_SANITIZE_NUMBER_INT);
  $stmt = $con->prepare("INSERT INTO `technos` (`ID`, `html`, `css`, `ajax`, `js`, `php`, `mysql`) VALUES ('$id ', '$html', '$css', '$ajax', '$js', '$php', '$mysql')"); 
  if ($stmt->execute()) {
    echo '<div class="alert alert-success alert-success fade show col-lg-3 mt-3 ml-auto mr-auto" role="alert">success<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>';
  }else {
    echo '<div class="alert alert-success alert-danger fade show col-lg-3 mt-3 ml-auto mr-auto" role="alert">Error<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>';  }
}

?>
<?php
include 'admin/footer.php';
if(isset($_POST['out'])){
  session_unset();
  session_destroy();
  header('location: login.php');
}
?>
</div>
<script src="user.js"></script>
