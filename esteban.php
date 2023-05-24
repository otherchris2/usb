<?php
    echo "Se ha agregado tu curso"."<br>";
    require_once __DIR__ . '/vendor/autoload.php';
    $client = new MongoDB\Client(
    'mongodb+srv://esteban:esteban1234@cluster0.68xawn4.mongodb.net/?retryWrites=true&w=majority');

    $con=$client->Test->user;

    $cur=$con->find();
    foreach($cur as $document){
        echo $document["name"] . "<br>";
        
    }


?>