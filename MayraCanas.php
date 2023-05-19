<?php

require_once __DIR__ . '/vendor/autoload.php';
$client = new MongoDB\Client(
    'mongodb+srv://macanasq:<password>@cluster0.zlf96tu.mongodb.net/?retryWrites=true&w=majority');

    $con=$client->Test->users;

    $cur=$con->find(); //Select from
    $datos=iterator_to_array($cur);
    echo $datos;
?>    