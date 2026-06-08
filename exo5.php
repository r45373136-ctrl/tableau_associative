<?php
$etudiant=[
    "nom"=> "Ndiaye",
     "prenom"=> "Rokhaya",
      "age"=> 20,
]; 
echo $etudiant["nom"] ."<br>";
echo $etudiant["age"] ."<br>";
foreach($etudiant as $key => $value) {
echo "$key : $value" ."<br>";
}

?>