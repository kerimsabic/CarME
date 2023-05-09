<?php


Flight::route('GET /api/manufacturemodels', function () {
    
    Flight::json(Flight::manufactureModelsServices()->get_all());
});


Flight::route('GET /api/manufacturemodels/@id', function ($id) {
    Flight::json(Flight::manufactureModelsServices()->getById($id));
});


/*Flight::route('GET /api/cars/@firstName/@lastName', function ($firstName, $lastName) {
    Flight::json(Flight::carsServices()->getUserByFirstNameAndLastName($firstName, $lastName));
});*/


Flight::route('POST /api/manufacturemodels', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::manufactureModelsServices()->add($data));
});


Flight::route('PUT /api/manufacturemodels/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::manufactureModelsServices()->update($id, $data);
    Flight::json(Flight::manufactureModelsServices()->getById($id));
});


Flight::route('DELETE /api/manufacturemodels/@id', function ($id) {
    Flight::manufactureModelsServices()->delete($id);
});




?>