<?php
require_once __DIR__ . '/BaseDao.class.php';

class CarsDao extends BaseDao  {
   
    public function __construct() {
        parent::__construct("cars");
    }

    function someCustomFunction(){
        return 0;
    }

}

?>