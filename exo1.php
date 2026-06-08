<?php
$jours=["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche",];
// print_r($jours);
echo "le premier jour" . ": " . $jours[0]."<br>";
echo  "le dernier jour" . ": " .$jours[6]."<br>";
foreach($jours as $jours){
    print_r($jours . "<br>");
}

?>