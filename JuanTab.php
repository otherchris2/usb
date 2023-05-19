<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client(
    'mongodb+srv://Basedatos:Base123@cluster0.bosd3.mongodb.net/lluvia?retryWrites=true&w=majority');
    
    $cur=$client->TallerAuto>Vehiculo;
        // "Select *from vehiculo"
    $cur=$con->find();

      $datos=iterator_to_array($cur)
        echo $datos;
    ?>