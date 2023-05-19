<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client('mongodb+srv://ClaseBD:ClaseDB02@cluster0.qn4pt8b.mongodb.net/?retryWrites=true&w=majority');

$con=$client->Test->post;

$cur=$con->find();
$datos= iterator_to_array($cur);
echo $datos;

?>