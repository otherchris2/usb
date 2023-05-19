<?php

require_once __DIR__ . '/vendor/autoload.php';
//Variables de entrada//--------------------------------------
$client = new MongoDB\Client(
    'mongodb+srv://Basedatos:Base123@cluster0.bosd3.mongodb.net/lluvia?retryWrites=true&w=majority');
    ?>