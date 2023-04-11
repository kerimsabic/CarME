<?php


Flight::route('GET /api/cars', function () {
    Flight::json(Flight::CarsServices()->get_all());
});


Flight::route('GET /api/cars/@id', function ($id) {
    Flight::json(Flight::CarsServices()->get_by_id($id));
});


/*Flight::route('GET /api/cars/@firstName/@lastName', function ($firstName, $lastName) {
    Flight::json(Flight::CarsServices()->getUserByFirstNameAndLastName($firstName, $lastName));
});*/


Flight::route('POST /api/cars', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::CarsServices()->add($data));
});


Flight::route('PUT /api/cars/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::CarsServices()->update($id, $data);
    Flight::json(Flight::CarsServices()->get_by_id($id));
});


Flight::route('DELETE /api/cars/@id', function ($id) {
    Flight::CarsServices()->delete($id);
});




?>