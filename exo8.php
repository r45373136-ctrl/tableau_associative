<?php
$personnes=[
    [
        "nom"=>"Coumba",
        "age"=>12,
    ],
     [
        "nom"=>"Ali",
        "age"=>22,
    ],
     [
        "nom"=>"Oumy",
        "age"=>30,
    ]
];
foreach($personnes as $p){
echo $p["nom"]. "<br>";

}
$max = $personnes[0];
foreach($personnes as $p){
    if ($p["age"] > $max["age"]){
        $max= $p;
    }
}
    echo "Le plus agé: " . $max["age"] ."<brj>";

$compteur = 0;
foreach($personnes as $p){
$compteur++;
}
echo "Le nombre total de personne: " . $compteur;

?>