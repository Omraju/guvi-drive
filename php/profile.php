<?php
require '../vendor/autoload.php';
$var1 =new MongoDB\Client('mongodb+srv://omraju006:<password>@cluster0.eu6w6vj.mongodb.net/?retryWrites=true&w=majority');
 $guvidb = $var1->guvidb;
 $var2 = $guvidb->createCollection('user');
 var_dump($var2);
?>

