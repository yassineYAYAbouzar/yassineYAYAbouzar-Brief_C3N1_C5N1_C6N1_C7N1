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
affichtable($month);
unset($month[ "said"]);
affichtable($month);


//Calcul note maximal t la note minimale
echo "la note maximale est: ".max($month)."la note minimale est:".min($month);
asort($month);
affichtable($month);
echo"la moyenne de la classe:".round(array_sum($month)/count($month),3);
echo array_sum($month);
?>