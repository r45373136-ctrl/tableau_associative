<?php
$couleurs=["Rouge", "Vert", "Bleu", "Jaune",];
// if(isset($couleur[0])){
//     echo "la couleur est pésente";
// }else{
//     echo "la couleur n'est pas pésente";
// }

$blueExiste=false;
$noirExiste=false;
foreach($couleurs as $couleur){
    if($couleur=="Bleu"){
        $blueExiste=true;
    }

     if($couleur=="Noir"){
        $noirExiste=true;
    }
};
if($blueExiste){
    echo"la couleur est dans le tableau";
}else{
     echo"la couleur n'est pas dans le tableau";
   
}
?>