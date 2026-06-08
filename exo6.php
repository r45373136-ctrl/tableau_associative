<?php
$produit=[
    "nom"=>"Ordinateur",
    "prix"=>35000,
    "stock"=>15,
];
echo $produit["nom"] ."<br>";
echo $produit["prix"] ."<br>";
if($produit["stock"]>0){
    echo"Le produit est disponible";
}else{
      echo"Le produit n'est pas disponible";
  
}
?>