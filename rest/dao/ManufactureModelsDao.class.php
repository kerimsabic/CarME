<?php

require_once __DIR__ . '/BaseDao.class.php';

class ManufactureModelsDao extends BaseDao  {
   
    public function __construct() {
        parent::__construct("manufacturemodels");
    }

    function someCustomFunction(){
        return 0;
    }

}

?>