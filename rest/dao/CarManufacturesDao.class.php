<?php

require_once __DIR__ . '/BaseDao.class.php';

class CarManufacturesDao extends BaseDao  {
   
    public function __construct() {
        parent::__construct("carmanufactures");
    }

    function someCustomFunction(){
        return 0;
    }

}

?>