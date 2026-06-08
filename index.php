<?php 
$etudiant = ["matricule"=>"ET0001","nom"=>"Modu LY","classe"=>"L1Dev"];
$etudiants=[
    ["matricule"=>"ET0001","nom"=>"Moussa LY","classe"=>"L1Dev"],
    ["matricule"=>"ET0002","nom"=>"Fatou Diop","classe"=>"L1DN"],
    ["matricule"=>"ET0003","nom"=>"Ngagne Ndoye","classe"=>"L1MCD"],
    ["matricule"=>"ET0004","nom"=>"Demba Diallo","classe"=>"L2MCD"],
    ["matricule"=>"ET0005","nom"=>"Penda Sagna","classe"=>"L1Dev"],
    ["matricule"=>"ET0006","nom"=>"Awa Fall","classe"=>"L1Dev"],
    ["matricule"=>"ET0007","nom"=>"Modu LY","classe"=>"L2Dev"]
    
];
// foreach ($etudiant as $key => $value) {
//    echo ucfirst($key)." : ".$value."<br>";
// }
// foreach ($etudiants as $value) {
//   echo "Matricule: ".$value['matricule']."<br>";
//   echo "Nom: ".$value['nom']."<br>";
//   echo "Classe: ".$value['classe']."<br>";
   
//  echo "<br> ===========================================<br>";
// }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">

    </div>
    <div class="container">
     <?php foreach ($etudiants as $value):?>
        <div class="card">
            <p>Matricule: <?php echo $value["matricule"]?></p>
            <p>Nom: <?php echo $value["nom"]?> </p>
            <p>Classe: <?php echo $value["classe"]?></p>
        </div>
     <?php endforeach?>

        
    </div>



</body>
</html>