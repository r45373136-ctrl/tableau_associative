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
foreach($personnes as $personne){
echo $personne["nom"]. "<br>";

}
$max= $personnes[0];
foreach($personnes as $personne){
    if ($personne["age"] > $max["age"]){
        $max= $personnes;
    }
}
    echo "Le plus agé: " . $max["nom"];

foreach($personne as $personne){
echo count($personne) ." personnes au total";

}

?>