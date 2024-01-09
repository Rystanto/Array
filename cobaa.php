<?php
 $foods = array("Seblak", " Bakso", "Batagor");
 $cities = ["Bandung", " Jakarta", " Semarang"];
 $countries = array("Indonesia", " Malaysia", " bekasi");

 //menampilkan array
//  echo "Saya suka : " . $foods[0] . "," . $foods[1] . " dan " . $foods[2] . ".";
//  echo "<br>";
//  var_dump($cities);
//  echo "<br>";
//  print_r($countries);


var_dump($foods);
$foods[] ="bakso";
echo"<br>";
var_dump($foods);
$foods[4] ="bakso";
echo"<br>";
var_dump($foods);

?>