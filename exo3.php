<?php
$notes=[12,15,14,10,18,];
$somme=0;
$max=$notes[0];
// $somme= array_sum($notes);
// echo "La somme est de ".$somme ."<br>";
// $moyenne= $somme / count($notes);
// echo "La moyenne est de ".$moyenne ."<br>";
// $max= max($notes);
// echo "La plus grande note est  ".$max;
foreach($notes as $note){
    $somme= $somme+$note;
    if($note>$max){
        $max=$note;
    }
}
$moyenne = $somme/count($notes);
echo "La somme est de ".$somme ."<br>";
echo "La moyenne est de ".$moyenne ."<br>";
echo "La plus grande note est  ".$max;

?>