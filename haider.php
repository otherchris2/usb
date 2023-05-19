<?php
require_once __DIR__ . '/vendor/autoload.php';

    echo "jijijiju";

    $client = new MongoDB\Client(
        'mongodb+srv://hadyr:1234567890@cluster0.ugfimkb.mongodb.net/?retryWrites=true&w=majority');

    $con=$client ->Test ->user;
    $cur=$con->find();
    $datos=iterator_to_array($cur);
    echo $datos;
?>