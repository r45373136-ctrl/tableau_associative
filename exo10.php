<?php
$livres =[
    [
        "titre"=>"L'amour sauvage",
        "auteur"=>"Rokhaya D",
        "disponible"=>true,
    ],

     [
        "titre"=>"La vie etudiante",
        "auteur"=>"Coumba",
        "disponible"=>true,
    ],
     [
        "titre"=>"la campagne",
        "auteur"=>"Jean",
        "disponible"=>false,
    ],

     [
        "titre"=>"Heritage",
        "auteur"=>"Sosso",
        "disponible"=>true,
    ],

     [
        "titre"=>"Univers",
        "auteur"=>"Fatou",
        "disponible"=>false,
    ],
];
foreach($livres as $key => $livre){
    echo $livre["auteur"]." : ". $livre["titre"] ."<br>";
}

echo "Les livres disponibles sont: <br>";
foreach($livres as $livre){
    if($livre["disponible"] === true){
        echo "-" .$livre ["titre"]."<br>";
    }
}
$compter=0;
foreach($livres as $livre){
    $compter++ ;
}
echo "Le nombre total de livre: ".$compter ."<br>";

$livres[]= $livre=[
    "titre"=> "La musique",
    "auteur"=> "Khadija",
    "disponible"=>false,
];
$compter=0;
foreach($livres as $livre){
    $compter++ ;
}
echo "Le nombre total de livre apres ajout: ".$compter ."<br>";


?>