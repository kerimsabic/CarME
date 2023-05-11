<?php

require_once __DIR__ . '/BaseDao.class.php';

class EngineDao extends BaseDao  {
   
    public function __construct() {
        parent::__construct("engine");
    }

    function someCustomFunction(){
        return 0;
    }

}

?>