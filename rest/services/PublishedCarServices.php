<?php

require_once 'BaseServices.php';
require_once __DIR__ . "/../dao/PublishedCarDao.class.php";

class PublishedCarService extends BaseServices {

    public function __construct()
    {
        parent::__construct(new PublishedCarDao);
    }

    function someCustomFunction()
    {
        return $this->dao->getUserByFirstNameAndLastName();
    }


}




?>