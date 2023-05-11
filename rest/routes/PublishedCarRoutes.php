<?php


Flight::route('GET /api/publishedcar', function () {
    
    Flight::json(Flight::publishedCarServices()->get_all());
});


Flight::route('GET /api/publishedcar/@id', function ($id) {
    Flight::json(Flight::publishedCarServices()->getById($id));
});


/*Flight::route('GET /api/cars/@firstName/@lastName', function ($firstName, $lastName) {
    Flight::json(Flight::carsServices()->getUserByFirstNameAndLastName($firstName, $lastName));
});*/


Flight::route('POST /api/publishedcar', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::publishedCarServices()->add($data));
});


Flight::route('PUT /api/publishedcar/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::publishedCarService()->update($id, $data);
    Flight::json(Flight::publishedCarServices()->getById($id));
});


Flight::route('DELETE /api/publishedcar/@id', function ($id) {
    Flight::publishedCarServices()->delete($id);
});




?>