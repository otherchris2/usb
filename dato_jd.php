<?php

require_once __DIR__ . '/vendor/autoload.php';
//Variables de entrada
//echo "awaw";
//--------------------------------------
$client = new MongoDB\Client(
    'mongodb+srv://jd:12345@cluster0.vwpxcac.mongodb.net/?retryWrites=true&w=majority');

   $con=$client ->Test ->user;
   $cur=$con->find();
   $datos=iterator_to_array($cur);
   //echo $datos;

?>