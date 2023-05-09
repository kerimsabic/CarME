<?php

require_once __DIR__ . '/BaseDao.class.php';

class CarCategoryDao extends BaseDao  {
   
    public function __construct() {
        parent::__construct("carcategory");
    }

    function someCustomFunction(){
        return 0;
    }

}

?>