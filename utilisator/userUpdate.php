<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../admin/sass/style.css">
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
      <li><a class="nav-link" href="userUpdate.php"><i class="fa fa-rocket"></i>Mes Compétence</a></li>
      <li><a class="nav-link" href="FormationUser.php"><i class="fa fa-info-circle"></i>Mes Formation</a></li>
    </ul>
  </div>
  <form action="" method="post"><button class="btn btn-danger" type="submit" name="out"><i class="fa fa-sign-out " >sign-out</i></button></form>
</nav>
<div class="margin-top">
<div class="card m-auto text-center " style="width: 18rem;">
<?php
include "../admin/conect.php";
session_start();

if(isset($_SESSION['ussername'])){
  $id =  $_SESSION["ussername"]->id ;
  $stmt2 = $con->prepare("SELECT * FROM developpeurs  INNER JOIN technos ON developpeurs.id = technos.ID WHERE developpeurs.id=$id ");
  $stmt2->execute();
  foreach ( $stmt2 as  $stmt ) {
      echo' 
      <h6 class= "mt-3">'. $stmt['FulName'] .'</h6>
      <hr>
      <img src="../'. $stmt['Image'] .'"  class="card-img-top  w-75 h-75 m-auto" alt="...">
      <div class="progresses col-lg-10" id="progresses">
      <div class="progress mb-3 ">
          <div class="progress-bar" role="progressbar" style="width: '. $stmt['html']."%" .'"
              aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
      <div class="progress mb-3 ">
          <div class="progress-bar" role="progressbar" style="width: '. $stmt['css']."%" .'"
              aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
      <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: '. $stmt['ajax']."%" .'"
              aria-valuenow=" 0" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
      <div class="progress mb-3">
          <div class="progress-bar " role="progressbar" style="width: '. $stmt['js']."%" .'"
              aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
      <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width:  '.$stmt['php']."%" .'"
              aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
      <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: '. $stmt['mysql']."%" .'"
              aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
        </div>';
  }
};

?>
<?php
if(isset($_POST['out'])){
  session_unset();
  session_destroy();
  header('location:../index.php');
}
?>
</div>
<script src="user.js"></script>
<script src="../admin/ADMIN.js"></script>
<?php
include '../admin/footer.php';
