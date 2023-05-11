<?php

require_once 'BaseServices.php';
require_once __DIR__ . "/../dao/EngineDao.class.php";

class EngineServices extends BaseServices {

    public function __construct()
    {
        parent::__construct(new EngineDao);
    }

    function someCustomFunction()
    {
        return $this->dao->getUserByFirstNameAndLastName();
    }


}




?>