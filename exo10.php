<?php
$livre=[
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
foreach($livre as $key => $value){
    echo ucfirst($key)." : ".$value."<br>";
}
?>