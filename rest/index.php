<?php

require '../vendor/autoload.php';


// import and register all business logic files (services) to FlightPHP
require_once __DIR__ . '/services/CarsServices.php';
require_once __DIR__ . '/services/UserServices.php';
require_once __DIR__ . '/services/CarManufacturesServices.php';
require_once __DIR__ . '/services/ManufactureModelsServices.php';
require_once __DIR__ . '/services/CarCategoryServices.php';


Flight::register('carsServices', "CarsServices");
Flight::register('userServices', "UserServices");
Flight::register('carManufacturesServices', "CarManufacturesServices");
Flight::register('manufactureModelsServices', "ManufactureModelsServices");
Flight::register('carCategoryServices', "CarCategoryServices");


// import all routes
require_once __DIR__ . '/routes/CarsRoutes.php';
require_once __DIR__ . '/routes/UserRoutes.php';
require_once __DIR__ . '/routes/CarManufacturesRoutes.php';
require_once __DIR__ . '/routes/ManufactureModelsRoutes.php';
require_once __DIR__ . '/routes/CarCategoryRoutes.php';


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