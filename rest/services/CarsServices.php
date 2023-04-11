<?php

require_once 'BaseServices.php';
require_once __DIR__ . "/../dao/CarsDao.class.php";

class CarsServices extends BaseServices {

    public function __construct()
    {
        parent::__construct(new CarsDao);
    }

    function someCustomFunction()
    {
        return $this->dao->getUserByFirstNameAndLastName();
    }


}




?>