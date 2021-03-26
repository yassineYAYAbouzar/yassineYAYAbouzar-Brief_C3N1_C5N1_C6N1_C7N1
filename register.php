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
<h2>Register</h2>
        <form class="form-contact" method="POST" enctype="multipart/form-data" >
          <div class="user-box">
            <input type="text" name="username" id="username" required="">
            <span class="virifyUser text-danger font-weight-light">FulName Trop court </span>
            <label >Username *</label>
          </div>
          <div class="user-box">
            <input type="email" name="email" id="email" required="">
            <span  class="virifyUser text-danger font-weight-light">Email Incorrect</span>
            <label >email *</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" id="password" required="">
            <span  class="virifyUser text-danger font-weight-light"> Password trop court</span>
            <label>Password *</label>
          </div>
          <div class="custom-file">
            <input type="file" name="file"  class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose Image</label>
            </div>
          <button  type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit
          </button>
</form>
</div>
<?php
include "admin/conect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //assign Variables
    $username =  filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $email =  filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password =  filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    $hashePass =  sha1($password);
    $filename = $_FILES["file"]["name"];
    $file = $_FILES["file"]["tmp_name"];
    move_uploaded_file($file ,"assets/" .$filename );
    $Images ="assets/" .$filename ;
    $stmt = $con->prepare("INSERT INTO `developpeurs` (`FulName`, `email`, `password`,`Image`) VALUES ('$username','$email' ,'$hashePass','$Images')");
    $stmt->execute();
    header('location: index.php');
}
?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="form.js"></script>
</body>
</html>
