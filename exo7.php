<?php
$contact=[
"Rokhaya"=>"770000001",
"Fatou"=>"770000002",
"Coumba"=>"770000003",

];
echo "Fatou: " .$contact["Fatou"] . "<br>";
$contact["Ali"]="770000004";
foreach($contact as $contact){
    print_r("=>" .$contact."<br>");
}
?>