<?php


Flight::route('GET /api/cars', function () {
    
    Flight::json(Flight::carsServices()->get_all());
});


Flight::route('GET /api/cars/@id', function ($id) {
    Flight::json(Flight::carsServices()->get_by_id($id));
});


/*Flight::route('GET /api/cars/@firstName/@lastName', function ($firstName, $lastName) {
    Flight::json(Flight::carsServices()->getUserByFirstNameAndLastName($firstName, $lastName));
});*/


Flight::route('POST /api/cars', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::carsServices()->add($data));
});


Flight::route('PUT /api/cars/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::carsServices()->update($id, $data);
    Flight::json(Flight::carsServices()->get_by_id($id));
});


Flight::route('DELETE /api/cars/@id', function ($id) {
    Flight::carsServices()->delete($id);
});




?>