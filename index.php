<?php

session_start();

$getal1 = $_GET['getal1'];
echo " ".$getal1;
$getal2 = $_GET['getal2'];
echo " + ".$getal2;

optellen($getal1,$getal2);
$_SESSION['getal'] = optellen($getal1,$getal2);


function optellen ($getala,$getalb){
    
    $totaal = $getala + $getalb;
    
    echo " = ".$totaal;
    return $totaal;
}


       
   
?>