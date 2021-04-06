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
    footer{
        bottom: -270px;
    }
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
<div class="margin-top d-inline-block">
<?php
include "../admin/conect.php";
session_start();

if(isset($_SESSION['ussername'])){
  $id =  $_SESSION["ussername"]->id ;
  $stmt2 = $con->prepare("SELECT * FROM developpeurs  INNER JOIN formations ON developpeurs.id = formations.ID WHERE developpeurs.id=$id ");
  $stmt2->execute();
  foreach ( $stmt2 as  $stmt ) {
      echo' 
      <div class="card m-auto text-center d-inline-block" style="width: 18rem;">

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body ">
      <button class="btn btn-light font-weight-bolder text-primary btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      '. $stmt['techno'] .'
      </button>
      <b class="font-italic">'. $stmt['date'] .'</b>
      </div>
    </div>
    <button type="submit" name="validation" class="btn btn-danger col-lg-12 '. $stmt['validation'] .'" id="validation">En cours </button>

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
  header('location: ../index.php');
}
?>
</div>
<script src="../admin/user.js"></script>
<script src="../admin/ADMIN.js"></script>
<?php
include '../admin/footer.php';
