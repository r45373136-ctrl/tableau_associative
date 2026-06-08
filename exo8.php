<?php
$personne=[
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
foreach($personne as $personne){
echo $personne["nom"]. "<br>";

}
foreach($personne as $personne){
// echo $personne["nom"]. "<br>";
$max= $max("age");
}
foreach($personne as $personne){
echo count($personne) ." personnes au total";

}

?>