<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop2</title>
</head>
<body>
<!-- Step1 -->
    <!-- 1 - Produire l'affichage des entiers de 1 à 10 à l'aide d'une boucle while.  -->
   
   <?php 
$x = 1;

while($x <= 10) {
  echo "The number is: $x <br>";
  $x++;
}
    ?>

<!-- 2 - Idem avec une boucle for. -->
<?php 
 
    function boucle($var){
    for ($x = 0; $x <= $var; $x++) {
    echo "The number is: $x <br>";
    }
    }
    boucle(20); 
?>
</body>
</html>