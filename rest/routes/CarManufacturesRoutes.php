<?php


Flight::route('GET /api/carmanufactures', function () {
    
    Flight::json(Flight::userServices()->get_all());
});


Flight::route('GET /api/carmanufactures/@id', function ($id) {
    Flight::json(Flight::carManufacturesServices()->getById($id));
});


/*Flight::route('GET /api/cars/@firstName/@lastName', function ($firstName, $lastName) {
    Flight::json(Flight::carsServices()->getUserByFirstNameAndLastName($firstName, $lastName));
});*/


Flight::route('POST /api/carmanufactures', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::carManufacturesServices()->add($data));
});


Flight::route('PUT /api/carmanufactures/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::carManufacturesServices()->update($id, $data);
    Flight::json(Flight::carManufacturesServices()->getById($id));
});


Flight::route('DELETE /api/carmanufactures/@id', function ($id) {
    Flight::carManufacturesServices()->delete($id);
});




?>