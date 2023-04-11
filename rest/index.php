<?php

require '../vendor/autoload.php';


// import and register all business logic files (services) to FlightPHP
require_once __DIR__ . '/services/CarsServices.php';


Flight::register('carsServices', "CarsServices");


// import all routes
require_once __DIR__ . '/routes/CarsRoutes.php';


// it is still possible to add custom routes after the imports
Flight::route('GET /', function () {
    echo "Hello";
});


Flight::start();



/*
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
 */

?>