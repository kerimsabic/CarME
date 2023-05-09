<?php

require_once 'BaseServices.php';
require_once __DIR__ . "/../dao/CarManufacturesDao.class.php";

class CarManufacturesServices extends BaseServices {

    public function __construct()
    {
        parent::__construct(new CarManufacturesDao);
    }

    function someCustomFunction()
    {
        return $this->dao->getUserByFirstNameAndLastName();
    }


}




?>