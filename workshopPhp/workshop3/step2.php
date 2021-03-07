<?php
echo "<table>";

$month = array("1" => "janvier", "2" => "Février", "3" => "Mars", "4" => "Avril", "5" => "Mai", "6" => "Juin", "7" => "Juillet", "8" => "Aout", "9" => "Septembre", "10" => "octobre", "11" => "Novembre", "12" => "Décembre");
echo "<table border=1>";
foreach ($month as $x => $x_value){
    echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";

}
echo "</table>";
?>
bouzaryassineAujourd’hui à 14:21
$ceu["karim"] ="10";
array_push($ceu["109"] = "17" );
<?php

//Fonction 
function affichtable($month){
    echo "<table border=1>";
    foreach ($month as $x => $x_value){
        echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
    }
    echo "</table>";
}

//** */
//Déclaration tableau
$month = array("cle" => "value", "said" => "13", "badr" => "16", "najat" => "15",);
//Afficher Tableau 
affichtable($month);

//Insertion
$month["karim"] ="10";
$month=array_merge($month, ["zrze" => "sdf"]);


affichtable($month);


//var_dump($month);


?>