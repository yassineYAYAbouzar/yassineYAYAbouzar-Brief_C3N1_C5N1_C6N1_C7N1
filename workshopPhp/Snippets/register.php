<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
<form class="col-lg-6 m-auto" action="register.php" method="POST">
<h1 class="text-center mb-5 ">Register</h1>
  <div class="form-group">
    <input name = "username" type="user" class="form-control"  placeholder="Full name" required>
  </div>
  <div class="form-group">
    <input name = "email" type="email" class="form-control"  placeholder="Email" required>
  </div>
  <div class="form-group">
    <input name = "password" type="password" class="form-control"  placeholder="Password" required>
  </div>

  <button type="submit" class="btn d-block w-100">Submit</button>
  </div>
</form>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="js.js"></script>
</body>
</html>
<?php
include "conect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //assign Variables
    $username =  filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $email =  filter_var($_POST['email'],FILTER_SANITIZE_STRING);
    $password =  filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    $hashePass = sha1($password );
    $stmt = $con->prepare("INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$username','$hashePass' , '$email')");
    $stmt->execute();
    header('location: index.php');
}
?>