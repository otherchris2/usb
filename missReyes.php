<!-- Hola me llamo santiago -->
<?php
    echo "Se ha agregado tu curso"."<br>";
    require_once __DIR__ . '/vendor/autoload.php';
    $client = new MongoDB\Client(
    'mongodb+srv://cristian:bases123@cluster0.yts9v3i.mongodb.net/?retryWrites=true&w=majority');

    $con=$client->Test->user;

    $cur=$con->find();

    $datos=iterator_to_array($cur);
    echo $datos;

?>