<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS, PATCH');
require 'vendor/autoload.php';

Flight::register('db', 'PDO', array('mysql:host=localhost;dbname=carmarketplace','root','sifra'));

Flight::route('/',function() {
    echo 'Hello world';
} );

Flight::route('GET /api/test', function(){
    $test = Flight::db()->query('SELECT * FROM Test', PDO::FETCH_ASSOC)->fetchAll();
    var_dump($test);
    Flight::json($test);
    });
 
 
 
 
 Flight::start();

?>