<?php

require_once 'BaseServices.php';
require_once __DIR__ . "/../dao/CarCategoryDao.class.php";

class CarCategoryServices extends BaseServices {

    public function __construct()
    {
        parent::__construct(new CarCategoryDao);
    }

    function someCustomFunction()
    {
        return $this->dao->getUserByFirstNameAndLastName();
    }


}




?>