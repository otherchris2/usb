<?php
require_once __DIR__. '/vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://yo:abc13579@cluster0.bosd3.mongodb.net/TallerAuto?retryWrites=true&w=majority');

$con=$client->TallerAuto->Vehiculo;

//"Select *from vehiculo"
$cur=$con->find();
//************** */
$datos=iterator_to_array($cur);
echo $datos;

?>