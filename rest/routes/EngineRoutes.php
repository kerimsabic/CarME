<?php


Flight::route('GET /api/engine', function () {
    
    Flight::json(Flight::carsServices()->get_all());
});


Flight::route('GET /api/engine/@id', function ($id) {
    Flight::json(Flight::engineServices()->getById($id));
});


/*Flight::route('GET /api/cars/@firstName/@lastName', function ($firstName, $lastName) {
    Flight::json(Flight::carsServices()->getUserByFirstNameAndLastName($firstName, $lastName));
});*/


Flight::route('POST /api/engine', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::engineServices()->add($data));
});


Flight::route('PUT /api/engine/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::engineServices()->update($id, $data);
    Flight::json(Flight::engineServices()->getById($id));
});


Flight::route('DELETE /api/engine/@id', function ($id) {
    Flight::engineServices()->delete($id);
});




?>