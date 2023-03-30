<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS, PATCH');

require 'vendor/autoload.php';
require 'rest/dao/CarsDao.class.php';

Flight::register('carsDao','CarsDao');


Flight::route('/',function() {
    echo 'Online car marketplace ';
    echo 'This is default route ';

} );

Flight::route('GET /api/cars', function(){
    Flight::json(Flight::carsDao()->getAllCars());
    });

Flight::route('GET /api/car/@id',function($id){
    Flight::json(Flight::carsDao()->getCarById($id));
});
 
 

 Flight::start();

?>