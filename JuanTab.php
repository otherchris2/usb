<?
require_once __DIR__ . '/vendor/autoload.php';

    echo "pollo";

    $client = new MongoDB\Client(
        ' mongodb+srv://jtaborda0308@cluster0.ugwukri.mongodb.net/?retryWrites=true&w=majority');

    $con=$client ->test ->user;
    $cur=$con->find();
    $datos=iterator_to_array($cur);
    echo $datos;
?>