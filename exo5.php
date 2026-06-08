<?php
$etudiant=[
    "nom"=> "Ndiaye",
     "prenom"=> "Rokhaya",
      "age"=> 20,
]; 
echo $etudiant["nom"] ."<br>";
echo $etudiant["age"] ."<br>";
foreach($etudiant as $etudiant){
print_r( $etudiant ." ");

}

?>