<?php
$personne=[
    [
        "nom"=>"Coumba",
        "note"=>12,
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
foreach($personne as $personne){
    print_r($personne);
}
// foreach($personne as $personne){
// }
    $somme= array_sum($personne["note"]);

?>