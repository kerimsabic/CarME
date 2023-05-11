<?php

require_once 'BaseServices.php';
require_once __DIR__ . "/../dao/ManufactureModelsDao.class.php";

class ManufactureModelsServices extends BaseServices {

    public function __construct()
    {
        parent::__construct(new ManufactureModelsDao);
    }

    function someCustomFunction()
    {
        return $this->dao->getUserByFirstNameAndLastName();
    }


}




?>