<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(to right, #E100FF, #7F00FF);
            width: 100vw;
            height: 100vh;
        }
        .form {
              margin-top: 20vh;
        }
        h1 {
              box-shadow: -1px 20px 27px -6px;
              color: #d6d6d6!important;
              padding-bottom: 12px;
              font-weight: 700;
              position: relative;
              animation-name: example;
              animation-duration: 4s;
              animation-delay: 2s;
              animation-iteration-count: infinite;
        }
        .btn{
          background: linear-gradient(to right, #f247fd, #8c24fe);
          outline:0;
          color:#FEE;
          font-weight: 700;
        }
        .btn.focus, .btn:focus {
          outline: 0;
          box-shadow: 0 0 0 0.0rem ;
        }
        .btn:hover {
          color: #ffffff;
        }
        .btn-2 {
          background: #fff;
          border: 2px solid #df41fd;
          color: #333;
        }
        .btn:hover {
          color: #355;
          background: linear-gradient(to right, #f247fd, #8c24fe);
        }
        @keyframes example {
            0%   {top:0px;}
            25%  {top:10px;}
            50%  {top:0px;}
            75%  {top:10px;}
            100% {top:0px;}
        }
    </style>
</head>
<body>
<div class="form">
<form class="col-lg-4 mt-3 m-auto " action="index.php" method="POST">

<h1 class="text-center mb-5 "> LOGIN</h1>

  <div class="form-group">
    <input name = "Ussername" type="text" class="form-control" placeholder="Full name" required>
  </div>
  <div class="form-group">
    <input name = "password" type="password" class="form-control" placeholder="Password" required>
  </div>

  <button type="submit" class="btn d-block w-100">Submit</button>
  <a href="register.php" class="btn btn-2 d-block w-100 mt-1"> Register</a>

</form>
</div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="js.js"></script>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['ussername'])){
  header('Location: dashbord.php'); //redirect to dashborde
}
include "conect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  //assign Variables
  $Ussername =  filter_var($_POST['Ussername'],FILTER_SANITIZE_STRING);
  $password =  filter_var($_POST['password'],FILTER_SANITIZE_STRING);
  $hashePass = sha1($password );
  $stmt = $con->prepare("SELECT username, password FROM users WHERE `username` = ? AND `password` = ?");
  $stmt->execute(array($Ussername,$hashePass));
  $count = $stmt->rowCount();
  if($count > 0 ){
    $_SESSION['ussername'] =$Ussername;
    header('Location: dashbord.php'); //redirect to dashborde
    exit();
  }
}

?>
