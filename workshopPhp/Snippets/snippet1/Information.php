<?php
session_start();
if(isset($_SESSION['ussername'])){
    echo '<div class="form">
    <form class="col-lg-6 m-auto">
    <h1 class="text-center mb-5 ">Information</h1>
      <div class="form-group">
        <input name = "username" type="user" class="form-control"  placeholder="Full name" value= "'. $_SESSION["ussername"] .'" required>
      </div>
      <div class="form-group">
        <input name = "email" type="email" class="form-control"  placeholder="Email" value= "'. $_SESSION["ussername"]  .'" required>
      </div>
      <div class="form-group">
        <input name = "password" type="password" class="form-control"  placeholder="Password" value= "'. $_SESSION["ussername"]  .'" required>
      </div>
    
      <button type="submit" class="btn btn-danger d-block w-100" value= "'.  $_SESSION["ussername"]  .'">Submit</button>
      </div>
    </form>';
}else{
    header('location: index.php');
}
?>

<style></style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <style>
 
    body {
  font-family: 'Rubik', sans-serif;
  background:linear-gradient(-120deg, #f3f3f5, #6f232a, #352384, #333447);
}
h1{
    text-align:center;
    margin-top:5px;
    color:#cecece;
}
ul {
  margin: 0;
  padding: 0;
}
li {
  list-style: none;
}
.navbar {
  position: absolute;
  width: 97px;
  height: 100%;
  background: linear-gradient(#AD2446,#61116E);
  transition: 0.3s;
  overflow: hidden;
  z-index: 1;
  top: 0;
}
.navbar:hover {
  width: 250px;
}
.navbar li {
  padding: 15px;
  width: 250px;
}
.navbar li a {
  color: #ffffff;
  text-decoration: none;
  display: block;
}
.navbar li i {
  margin-right: 28px;
  font-size: 35px;
}
.content {
  padding: 15px 30px;
  position: relative;
  display: inline-block;
  left: 50px;
}
form{
    text-align:center;
}
button {
    padding: 7px;
    font-size: 13px;
    cursor: pointer;
}
    </style>
</head>
<body>
<div class="navbar">
  <ul>
    <li><a href="dashbord.php"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="Information.php"><i class="fa  fa-users"></i> User</a></li>
    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>
    <li><a href=""><i class="fa fa-home"></i> Home</a></li>
    <form action="" method="post"><button type="submit" name="out"><i class="fa fa-sign-out" >sign-out</i></button></form>
  </ul>
</div>
<div class="content">
</div>
</body>
</html>
<?php
if(isset($_POST['out'])){
    session_unset();
    session_destroy();
    header('location: index.php');
}

?>