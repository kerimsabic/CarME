<?php


Flight::route('GET /api/users', function () {
    
    Flight::json(Flight::userServices()->get_all());
});


Flight::route('GET /api/users/@id', function ($id) {
    Flight::json(Flight::userServices()->getById($id));
});


/*Flight::route('GET /api/cars/@firstName/@lastName', function ($firstName, $lastName) {
    Flight::json(Flight::carsServices()->getUserByFirstNameAndLastName($firstName, $lastName));
});*/


Flight::route('POST /api/users', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::userServices()->add($data));
});


Flight::route('PUT /api/users/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::userServices()->update($id, $data);
    Flight::json(Flight::userServices()->getById($id));
});


Flight::route('DELETE /api/users/@id', function ($id) {
    Flight::userServices()->delete($id);
});




?>