<?php
$etudiants=[
    [
        "nom"=>"Coumba",
        "note"=>2,
    ],
     [
        "nom"=>"Ali",
        "note"=>20,
    ],
     [
        "nom"=>"Oumy",
        "note"=>15,
    ],
     [
        "nom"=>"Ablaye",
        "note"=>14,
    ],
     [
        "nom"=>"Saliou",
        "note"=>9,
    ]
];
foreach($etudiants as $etudiant){
    echo $etudiant["nom"] . " : ". $etudiant["note"] ."<br>";
    }
    $somme =0;
    $nbr =0;
foreach($etudiants as $etudiant){
$somme = $somme + $etudiant["note"];
$nbr++ ;
}
$moyenne =$somme / $nbr;
echo "La moyenne est de: " .$moyenne . "<br>";

$meilleur =$etudiants[0];
foreach($etudiants as $etudiant){
if($etudiant["note"] > $meilleur["note"]){  
    $meilleur = $etudiant;
}
}
echo  "le meilleur etudiant est: ". $meilleur["nom"] . "<br>";

foreach($etudiants as $etudiant){
if($etudiant["note"] >= 10){  
        echo $etudiant["nom"] . " : ". $etudiant["note"] ."<br>";

}
}

?>