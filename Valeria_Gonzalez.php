<?php

require_once __DIR__ . '/vendor/autoload.php';
//Variables de entrada
$a="1995";
$b="Pajas Blancas";
//--------------------------------------
$client = new MongoDB\Client(
    'mongodb+srv://yo:abc13579@cluster0.bosd3.mongodb.net/lluvia?retryWrites=true&w=majority');