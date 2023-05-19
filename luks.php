<?php

require_once __DIR__ . '/vendor/autoload.php';
//Variables de entrada

echo "jijijiju";

//--------------------------------------
$client = new MongoDB\Client(
    'mongodb+srv://santichi:lukassantiago809@cluster0.dv2ss6e.mongodb.net/?retryWrites=true&w=majority');
   
    $con=$client ->test ->users;
    $cur=$con->find();
    $datos=iterator_to_array($cur);
    echo $datos;
?>



