<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="sass/style.css">
    <title>Document</title>
</head>
<body>
<div class="login-box">
        <h2>Login</h2>
        <form method="POST">
          <div class="user-box">
            <input type="text" name="Ussername" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
          <button  type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit
          </button>
          <a href="register.php" class="btn btn-2 d-block w-100 mt-1"> Register</a>
        </form>
      </div>
</div>

<?php
session_start();
include "admin/conect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
  $Ussername =  filter_var($_POST['Ussername'],FILTER_SANITIZE_STRING);
  $password =  filter_var($_POST['password'],FILTER_SANITIZE_STRING);
  $hashePass = sha1($password);
  $stmt = $con->prepare("SELECT * FROM developpeurs WHERE `FulName` = ? AND `password` = ?");
  $stmt->execute(array($Ussername,$hashePass));
  $count = $stmt->rowCount();
  if($count === 1 ){
    $user = $stmt->fetchObject();
    $_SESSION['ussername'] =$user;
    if ($_SESSION["ussername"]->Role === "user") {
      header('Location: userPage.php');
      exit();
    }elseif ($_SESSION["ussername"]->Role === "admin") {
      header('Location: admin/Home.php');
    }
  }else{
    echo '<div class="alert alert-success alert-danger fade show col-lg-3 mt-5 ml-auto mr-auto" role="alert">Nom d\'utilisateur ou mot de passe incorrect .<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>';
  }
  
}

?>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   
</body>
</html>
