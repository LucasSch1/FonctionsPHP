<?php
// Exo 1
// $motdefaut = readline("Veuillez entrer un mot :");
// $motinverser = strtolower(strrev($motdefaut));

// if (strtolower($motdefaut) == $motinverser)
// {
//     print("Le mot que vous avez saisi est un palindrome");
// }
// else{
//     print("Le mot que vous avez saisi n'est pas un palindrome");
// }
// Fin Exo 1

// Exo 2
// $notes = [10,20,13];
// $sum = array_sum($notes);
// $count = count($notes);
// echo "Vous avez ".round($sum/$count)." de moyenne";
// Fin Exo 2 

// Exo 3 
// $notes = [10,20,13];
// array_push($notes,16,17);
// print_r($notes); 
// Fin Exo 3

// Exo 4 
$insultes = ['merde','con'];
$asterisque = [];
foreach ($insultes as $insulte)
{
    $lettre = substr($insulte,0,1);
    $asterisque[] = $lettre.str_repeat('*',strlen($insulte));
}
$phrase = readline('Entrer votre phrase : ');
$phrase = str_replace($insultes, $asterisque,$phrase);
// foreach($insultes as $insulte ){
//     $taille = strlen($insulte);
//     $censure = str_repeat('*',$taille);
//     $phrase = str_replace($insulte,$censure,$phrase);
// }
echo $phrase;

//Fin Exo 4


?>