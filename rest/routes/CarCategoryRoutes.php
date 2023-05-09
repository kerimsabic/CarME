<?php


Flight::route('GET /api/carcategory', function () {
    
    Flight::json(Flight::carCategoryServices()->get_all());
});


Flight::route('GET /api/carcategory/@id', function ($id) {
    Flight::json(Flight::carCategoryServices()->getById($id));
});


/*Flight::route('GET /api/cars/@firstName/@lastName', function ($firstName, $lastName) {
    Flight::json(Flight::carsServices()->getUserByFirstNameAndLastName($firstName, $lastName));
});*/


Flight::route('POST /api/carcategory', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::carCategoryServices()->add($data));
});


Flight::route('PUT /api/carcategory/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::carCategoryServices()->update($id, $data);
    Flight::json(Flight::carCategoryServices()->getById($id));
});


Flight::route('DELETE /api/carcategory/@id', function ($id) {
    Flight::carCategoryServices()->delete($id);
});




?>